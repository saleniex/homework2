<?php

use App\NumberEvaluator;
use App\FileLogger;

require_once '../vendor/autoload.php';

$logger = new FileLogger('../application.log');
if ( ! isset($_GET['number'])) {
    $logger->log('Number is not provided', 'error');
    exit(1);
}

$digit = $_GET['number'];
$evaluationType = $_GET['evaluationType'];

$evenEvaluator = new NumberEvaluator();
$message = $evenEvaluator->evaluate($digit, $evaluationType)
    ? sprintf('%d is even', $digit)
    : sprintf('%d is odd', $digit);
$logger->log($message, 'info');
