<?php

use App\EvenNumberEvaluator;
use App\FileLogger;
use App\PositiveNumberEvaluator;
use App\ZeroEvaluator;

require_once '../vendor/autoload.php';

$logger = new FileLogger('../application.log');
if ( ! isset($_GET['number'])) {
    $logger->log('Number is not provided', 'error');
    exit(1);
}

$param = $_GET['parameter'];
$digit = $_GET['number'];


switch ($param)
{
    case 'is-even':
        $evenEvaluator = new EvenNumberEvaluator();
        $message = $evenEvaluator->evaluate($digit) ? sprintf('%d is even', $digit) : sprintf('%d is odd', $digit);
        break;
    case 'is-positive':
        $positiveEvaluator = new PositiveNumberEvaluator();
        $message = $positiveEvaluator->evaluate($digit) ? sprintf('%d is positive', $digit) : sprintf('%d is negative', $digit);
        break;
    case 'is-zero':
        $zeroEvaluator = new ZeroEvaluator();
        $message = $zeroEvaluator->evaluate($digit) ? sprintf('%d is zero', $digit) : sprintf('%d is not zero', $digit);
        break;
    default: $message = sprintf('undefined evaluation for %d', $digit);
}

$logger->log($message, 'info');
