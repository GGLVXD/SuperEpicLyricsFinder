<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require 'vendor/predis/predis/autoload.php';



PredisAutoloader::register();
// since we connect to default setting localhost


// and 6379 port there is no need for extra


// configuration. If not then you can specify the


// scheme, host and port to connect as an array


// to the constructor.


try {


    $redis = new PredisClient();



    $redis = new PredisClient(array(


        "scheme" => "tcp",


        "host" => "38.242.217.9",


        "port" => 6379));



    echo "Successfully connected to Redis";


}


catch (Exception $e) {


    echo "Couldn't connected to Redis";


    echo $e->getMessage();


}