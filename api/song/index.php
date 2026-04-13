<?php
$envPath = dirname(__DIR__, 2) . '/.env';
$env = parse_ini_file($envPath, false, INI_SCANNER_RAW);


$apiKey = $env['GENIUS_KEY'];
header("Content-Type: application/json");

$id=$_GET['id'];  

$options  = ['http' => ['header' => "Authorization: Bearer $apiKey"]];
$context  = stream_context_create($options);
$data = file_get_contents("https://api.genius.com/songs/$id", false, $context);


echo $data;
?>