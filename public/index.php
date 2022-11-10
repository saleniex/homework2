<?php

use App\Evaluators\EvaluatorFactory;
use App\FileLogger;

require_once '../vendor/autoload.php';

$logger = new FileLogger('../application.log');
if ( ! isset($_GET['number'])) {
    $logger->log('Number is not provided', 'error');
    exit(1);
}

$evaluator = new EvaluatorFactory($_GET['param'], $_GET['number']);
$logger->log($evaluator->evaluateNumber(), 'info');
