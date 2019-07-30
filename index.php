<?php

//api endpoint
//receive JSON object


$received = file_get_contents('php://input');
// echo $received;
// die();
$converted = json_decode($received);
echo $converted;
die();
//print_r($converted);
//var_dump($) 
header('Content-Type: application/json');
echo json_encode($converted, true);

