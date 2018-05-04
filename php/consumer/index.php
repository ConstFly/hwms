<?php
$APIURL="http://localhost:8000";

// Get our message from the API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $APIURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$apiresponse = curl_exec($ch);
curl_close($ch);

$response = json_decode($apiresponse);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello World Microservice Consumer</title>
  <style media="screen">
    .message {
      background-color: #ddd;
      border-radius: 10px;
      font-size: 3em;
      margin: 50px auto;
      padding: 20px;
      text-align: center;
      width: 75%;
    }
  </style>
</head>
<body>
  <div class="message"><?php echo $response->message; ?></div>
</body>
</html>
