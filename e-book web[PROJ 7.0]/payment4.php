<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Books";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookId = $_POST['book_id'];

    // Step 1: Check current stock
    $checkSql = "SELECT Stock FROM BookInfo WHERE ID = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("i", $bookId);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $currentStock = $row['Stock'];

        if ($currentStock > 0) {
            // Step 2: Reduce stock by 1
            $updateSql = "UPDATE BookInfo SET Stock = Stock - 1 WHERE ID = ?";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bind_param("i", $bookId);
            $updateStmt->execute();

            if ($updateStmt->affected_rows > 0) {
                $message = " Payment successful!";
            } 

            $updateStmt->close();
        } else {
            $message = " Book is out of stock.";
        }
    }

    $checkStmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment Form</title>
  <link rel="stylesheet" href="assets/css/reigister.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet" />
  <!-- AOS LIBRARY -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>
<body>

<!-- HOME BUTTON -->
<button>
  <a href="main.html"><span>Home</span></a> 
</button>

<!-- Payment Form -->
<center>
    
  <div class="form-box">
    
    <h1>
  <?php if (isset($message)): ?>
  <div class="message-box"><?php echo $message; ?></div>
<?php endif; ?>
</h1>

    <form class="form" method="POST" action="payment.php">
      <span class="title">Complete your purchase</span>
      <span class="subtitle">Enter payment details.</span>
      <div class="form-container">
        <input type="hidden" name="book_id" value="3"> <!--UPDATE VALUE TO MATCH ID IN THE DATABASE TO REDUCE STOCK -->
        <input type="text" name="fullname" class="input" placeholder="Full Name" required>
        <input type="text" name="cardnumber" class="input" placeholder="Card Number" maxlength="16" required>
        <input type="text" name="expiry" class="input" placeholder="Expiration Date (MM/YY)" required>
        <input type="text" name="cvv" class="input" placeholder="CVV" maxlength="4" required>
        <input type="text" name="billing" class="input" placeholder="Billing Address" required>
        <input type="text" name="city" class="input" placeholder="City" required>
        <input type="text" name="country" class="input" placeholder="Country" required>
      </div>
      <button type="submit">Pay Now</button>

      
    </form>
  </div>
</center>


<script>
  fetch("footer.html")
    .then(response => response.text())
    .then(data => {
      document.getElementById("footer-placeholder").innerHTML = data;
      AOS.refresh(); // Re-initialize AOS after dynamically adding content
    });
</script>

<!-- AOS LIBRARY -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
