<?php
require 'vendor/autoload.php';
$mb = new Sgrover\Hwms\MessageBuilder;

// default to a 404 - Not Found if anything other than a GET request is made.
$statuscode = 404;
$status = 'Not Found';
$data = [];
$method = $_SERVER['REQUEST_METHOD'];

if ( $method == 'GET' ) {
  // We have a GET request, grab our message and set the status to OK.
  $statuscode = 200;
  $status = 'OK';
  $data = [
    'message' => $mb->getMessage()
  ];
}

// create the response
header('HTTP/1.1 '. $statuscode .' '. $status);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
