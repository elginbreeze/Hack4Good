<?php

$dbLink = mysql_connect('localhost', 'hack4good', 'geeklist');
mysql_select_db('hack4good', $dbLink);
  
$sql = "SELECT * FROM user WHERE userId = 1";

$result = mysql_query($sql) or die(mysql_error());

$columns = array();
$resultset = array();
while ($row = mysql_fetch_assoc($result)) {
    if (empty($columns)) {
        $columns = array_keys($row);
    }
    $resultset['user'] = $row;
}

// Prevent caching.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');

// The JSON standard MIME header.
header('Content-type: application/json');
$json = json_encode($resultset);
echo $json;

?>