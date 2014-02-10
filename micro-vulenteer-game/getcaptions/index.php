<?php


$dbLink = mysql_connect('localhost', 'hack4good', 'geeklist');
mysql_select_db('hack4good', $dbLink);

$userSql = "SELECT * FROM user WHERE userId = 1";

$userResult = mysql_query($userSql) or die(mysql_error());

$cols = array();
$user = array();
while ($row = mysql_fetch_assoc($userResult)) {
    if (empty($cols)) {
        $cols = array_keys($row);
    }
    $user = $row;
}

$accuracy = 90 - $user['rating'];
  
$sql = "SELECT * 
FROM caption, video
WHERE accuracy <90
AND caption.videoId = video.id
AND caption.id NOT IN (
SELECT captionId 
FROM translations
)
AND accuracy < ".$accuracy ."
LIMIT 0 , 30";

$result = mysql_query($sql) or die(mysql_error());

$columns = array();
$resultset = array();
while ($row = mysql_fetch_assoc($result)) {
    if (empty($columns)) {
        $columns = array_keys($row);
    }
    $resultset[]['video'] = $row;
}
 
$number = rand(0,count($resultset)-1);
$json = json_encode($resultset[$number]);

// Prevent caching.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');

// The JSON standard MIME header.
header('Content-type: application/json');
echo $json;

mysql_close($dbLink);
?>