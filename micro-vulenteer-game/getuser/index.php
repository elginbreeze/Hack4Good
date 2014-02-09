<?php

$user["id"] = 12;
$user["name"] = "Arno";
$user["rating"] = rand(40, 75);

$data["user"] = $user;

$json = json_encode($data);
echo $json;

?>