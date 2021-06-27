<?php

//$con = mysqli_connect("localhost","root","","project_abcschool");
$con = mysqli_connect("localhost","abcintez_abcuser","fa213243z","abcintez_school");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$GLOBALS["con"] = $con;

?>