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
  
$sql = "SELECT * FROM videocaption WHERE confidence < 90 ";

$result = mysqli_query($con, $sql);

$data = array();

//while($row = mysqli_fetch_array($result))
//{
 //   $data[] = $row;
//}

mysqli_close($con);


$entry["captionid"] = 100;
$entry["url"] = "http://www.youtube.com/embed/okqEVeNqBhc";
$entry["subject"] = "math";
$entry["startpoint"] = "131";
$entry["endpoint"] = "135";
$entry["accuracy"] = 85;
$entry["language"] = "english";
$entry["caption"] = "I will never let you be rickrolled";
$data[0]['video'] = $entry;

$entryTwo["captionid"] = 100;
$entryTwo["url"] = "http://www.youtube.com/embed/okqEVeNqBhc";
$entryTwo["subject"] = "math";
$entryTwo["startpoint"] = "135";
$entryTwo["endpoint"] = "138";
$entryTwo["accuracy"] = 85;
$entryTwo["language"] = "english";
$entryTwo["caption"] = "Or maybe you are ...";
$data[1]['video'] = $entryTwo;

$entryThree["captionid"] = 100;
$entryThree["url"] = "http://www.youtube.com/embed/okqEVeNqBhc";
$entryThree["subject"] = "math";
$entryThree["startpoint"] = "145";
$entryThree["endpoint"] = "148";
$entryThree["accuracy"] = 85;
$entryThree["language"] = "english";
$entryThree["caption"] = "You are being Rick Rolled";
$data[2]['video'] = $entryThree;
  
$number = rand(0,2);
$json = json_encode($data[$number]);
echo $json;

?>