<?php

$value = json_decode($_POST['json']);

$username = "root";
$password = "root";
$hostname = "localhost"; 

echo $value->page;
?>