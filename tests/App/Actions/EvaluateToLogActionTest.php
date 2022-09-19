<?php

namespace App;

use PHPUnit\Framework\TestCase;

use App\Evaluators\Factory\NumberEvaluatorFactory;
use App\Formaters\Factory\NumberFormaterFactory;
use App\Loggers\FileLogger;
use App\Actions\EvaluateToLogAction;

class EvaluateToLogActionTest extends TestCase
{
    public function testAction()
    {

        $method="even";

        $digit =4;

        $logMonk = $this->createMock(FileLogger::class, array('log'));        

        $logMonk->expects($this->once())->method('log')->will(
            $this->returnCallback(function(string $message, string $level) {
             $this->assertEquals($message,"4 is even");
             $this->assertEquals($level,"info");             
        }));

        $evaluator = (new NumberEvaluatorFactory())->evaluator($method);
        
        $formater = (new NumberFormaterFactory())->formater($method);;
        
        $action = new EvaluateToLogAction($evaluator,$formater,$logMonk);
        $action($digit);   
        
        


    }
}
