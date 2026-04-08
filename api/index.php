<?php

header("Content-Type: application/json");

$data = file_get_contents("https://api.popcat.xyz/v2/lyrics?song=aaa");

if (json_validate($data)){
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$lyrics = json_decode($data, true);
}} else {
    echo "fuckoff";
}

echo $lyrics["message"]["lyrics"];
?>