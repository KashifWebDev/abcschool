<?php
//$con = mysqli_connect("localhost","root","kashif@123","project_member");
$con = mysqli_connect("localhost","root","","project_abcschool");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$GLOBALS["con"] = $con;

?>