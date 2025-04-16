<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css
" rel="stylesheet">
<!-- style link -->
<link href="assets/css/display.css" rel="stylesheet">



</head>
<body>
    <center >
<h1>LOG IN INFORMATIONS AND REGISTERATION</h1>
</center>
<div class ="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">sl</th>
      <th scope="col">FullName</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
<?php

$sql="select * from `persons`";
$result = mysqli_query($con,$sql);
if($result){
 while($row = mysqli_fetch_assoc($result)){
    $id = $row['PersonID'];
    $fullname = $row['FullName'];
    $email = $row['Email'];
    $password = $row['PASSWORD'];
    echo '
     <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$fullname.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
      <td><button class="btn btn-danger" type="button">
      <a href="delete.php? deleteid='.$id.'" class="text-light">Delete Info</a></button></td>
    </tr>
    ';
 }  
}




?>



</div>

















<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>