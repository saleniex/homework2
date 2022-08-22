<?php
declare(strict_types=1);

use App\Enums\NumberEvaluatorMethods;
use App\Services\FileLogger;
use App\Services\NumberEvaluatorService;
use App\Exceptions\InvalidNumberEvaluatorMethodException;
use App\Exceptions\InvalidNumberEvaluatorParameterException;

require_once '../vendor/autoload.php';

$logger = new FileLogger('../application.log');

try {
    if (!isset($_GET['number']) || !is_numeric($_GET['number'])) {
        throw new InvalidNumberEvaluatorParameterException();
    }

    if (!NumberEvaluatorMethods::tryFrom($_GET['method'])) {
        throw new InvalidNumberEvaluatorMethodException();
    }

    $numberEvaluator = new NumberEvaluatorService((int)$_GET['number'], NumberEvaluatorMethods::from($_GET['method']));

    $message = $numberEvaluator->evaluate();

    $logger->log($message, 'info');
} catch (\Throwable $e) {
    $logger->log($e->getMessage(), 'error');
    exit(1);
}
