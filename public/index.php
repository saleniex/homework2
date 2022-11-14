<?php

use App\EvaluatorController;
use App\EvenNumberEvaluator;
use App\FileLogger;

require_once '../vendor/autoload.php';

$logger = new FileLogger('../application.log');
if (!isset($_GET['number'])) {
    $logger->log('Number is not provided', 'error');
    exit(1);
}
$method = $_GET['method_name'];
$digit = $_GET['number'];

$evaluator = new EvaluatorController($digit, $method);
$message = $evaluator->completeEvaluation();
$logger->log($message, 'info');
