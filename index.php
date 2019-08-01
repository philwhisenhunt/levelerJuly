<?php

//api endpoint
//receive JSON object

// echo json_encode(42);
// die();
//header('Content-Type: application/json');
//header('Content-Type: html/text');
// echo "got it";
// $test = "hello";
// echo json_encode($test);
// die();
// header('Content-Type: multipart/form-data');

$received = file_get_contents('php://input');
var_dump($received);
die();
//$received = json_decode($received);
//$received = json_encode($received);
echo $received;
die();
//header('Content-Type: application/json');

echo json_encode($received);
die();
$converted = json_decode($received);
echo "hello" + $converted;
die();
//print_r($converted);
//var_dump($) 
echo json_encode($converted, true);

