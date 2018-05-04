<?php
include 'vendor/autoload.php';
$mb = new Sgrover\Hwms\MessageBuilder;
$output = 'Message builder says "'. $mb->getMessage() .'"'. PHP_EOL;
echo $output;
