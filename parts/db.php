<?php

//$con = mysqli_connect("localhost","root","","project_abcschool");
$con = mysqli_connect("server127.web-hosting.com","turkvjwp_fingerprinttest","fingerprinttest","turkvjwp_abc");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$GLOBALS["con"] = $con;

?>