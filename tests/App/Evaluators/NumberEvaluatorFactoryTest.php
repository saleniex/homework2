<?php

namespace App;

use PHPUnit\Framework\TestCase;

use App\Evaluators\Factory\NumberEvaluatorFactory;

use App\Evaluators\NumberEvaluatorInterface;


class NumberEvaluatorFactoryTest extends TestCase
{

    protected $names= ['zero','positive','even'];

    public function testFactory()
    {
        $factory = new NumberEvaluatorFactory();

        foreach ($this->names as $name) {
            $evaluator = $factory->evaluator($name);
            $this->assertInstanceOf(NumberEvaluatorInterface::class,$evaluator);            

            // test single instance
            $this->assertSame( spl_object_id($evaluator), spl_object_id($factory->evaluator($name)));        
        }
    }
}
