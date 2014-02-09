<?php

// get user from database

// determine user score 
// based on that pick next level


$con=mysqli_connect("localhost","hack4good","geeklist","hack4good");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM TABLE";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>