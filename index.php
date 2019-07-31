<?php

//api endpoint
//receive JSON object

echo json_encode(42);
die();
$received = file_get_contents('php://input');
//header('Content-Type: application/json');

echo json_encode($received);
die();
$converted = json_decode($received);
echo "hello" + $converted;
die();
//print_r($converted);
//var_dump($) 
header('Content-Type: application/json');
echo json_encode($converted, true);

