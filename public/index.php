<?php

use App\Evaluators\Factory\NumberEvaluatorFactory;
use App\Formaters\Factory\NumberFormaterFactory;
use App\Loggers\FileLogger;
use App\Actions\EvaluateToLogAction;



require_once '../vendor/autoload.php';

$logger = new FileLogger('../application.log');

try {

    //can be moved to separate validator 
    $digit =  is_numeric($_GET['number']??null) ? intval($_GET['number']) : throw new \Exception('Number required and must be integer type') ;

    $method = $_GET['evaluate']??'even'; // set default evaluate method to 'even' for backward compatibility

    $evaluator = (new NumberEvaluatorFactory())->evaluator($method) ?? throw new \Exception ("Evaluator \"{$method}\" not found");

    $formater = (new NumberFormaterFactory())->formater($method) ?? throw new \Exception ("Formater for \"{$method}\" not found");

    // can be used many paterns , demo of __invoke
    $action = new EvaluateToLogAction($evaluator,$formater,$logger);
    $action($digit);

} catch (\Exception $e) {
    $logger->log($e->getMessage(), 'error');
}
