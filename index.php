<?php

//api endpoint
//receive JSON object


$received = file_get_contents('php://input');

$converted = json_decode($received);
//print_r($converted);
//var_dump($) 
header('Content-Type: application/json');
echo json_encode($converted, true);

