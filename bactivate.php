<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activate</title>
</head>
<body>
  

<?php
include('function.php');

if (isset($_GET['id'])){
  
  // Store the value from get to a 
  // local variable "course_id"
  $food_id=$_GET['id'];

  // SQL query that sets the status
  // to 1 to indicate activation.
  $sql="UPDATE `bodily` SET 
       `Counter`=1 WHERE Catid='$food_id'";

  // Execute the query
  mysqli_query($cn,$sql);
}

// Go back to course-page.php
header('location: bodily.php#header');
?>
</body>
</html>

