<?php

namespace App\Actions;

use App\Evaluators\NumberEvaluatorInterface;
use App\Formaters\NumberFormaterInterface;
use App\Loggers\LoggerInterface;

class EvaluateToLogAction 
{
    protected static $logtype = 'info';

    protected $evaluator = null;

    protected $formater = null;

    protected $logger = null;

    public function __construct(NumberEvaluatorInterface $evaluator = null,NumberFormaterInterface $formater = null,LoggerInterface $logger = null)
    {
        $this->evaluator=$evaluator;       
        $this->formater=$formater;         
        $this->logger=$logger;        
    }
    
    public function __invoke(int $digit): void
    {
        $result =  $this->evaluator->evaluate($digit);
        $message = $this->formater->format($digit, $result);
        $this->logger->log($message, static::$logtype);
    }


}