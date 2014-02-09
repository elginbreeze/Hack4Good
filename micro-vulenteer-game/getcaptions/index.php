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
$entry["url"] = "https://www.youtube.com/watch?v=kpCJyQ2usJ4";
$entry["subject"] = "math";
$entry["startpoint"] = "20";
$entry["endpoint"] = "24";
$entry["accuracy"] = 85;
$entry["language"] = "english";
$entry["caption"] = "but we cannot understood it if we do not first run the language";
$data[0]['video'] = $entry;

$entryTwo["captionid"] = 100;
$entryTwo["url"] = "https://www.youtube.com/watch?v=kpCJyQ2usJ4";
$entryTwo["subject"] = "math";
$entryTwo["startpoint"] = "43";
$entryTwo["endpoint"] = "46";
$entryTwo["accuracy"] = 85;
$entryTwo["language"] = "english";
$entryTwo["caption"] = "in deeper into blahblahbla is that we're going to start abh4cking things are";
$data[1]['video'] = $entryTwo;

$entryThree["captionid"] = 100;
$entryThree["url"] = "https://www.youtube.com/watch?v=kpCJyQ2usJ4";
$entryThree["subject"] = "math";
$entryThree["startpoint"] = "105";
$entryThree["endpoint"] = "115";
$entryThree["accuracy"] = 20;
$entryThree["language"] = "english";
$entryThree["caption"] = "so I'm interested in a twenty dollar in my pocket I'm, I'm, I'm hunting, looking for a come up, this is fucking awesome";
$data[2]['video'] = $entryThree;
  
$number = rand(0,2);
$json = json_encode($data[$number]);
echo $json;

?>