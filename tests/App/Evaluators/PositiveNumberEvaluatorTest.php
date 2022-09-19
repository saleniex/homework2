<?php

namespace App;

use PHPUnit\Framework\TestCase;

use App\Evaluators\PositiveNumberEvaluator;

class PositiveNumberEvaluatorTest extends TestCase
{
    public function testEvaluate()
    {
        $evaluator = new PositiveNumberEvaluator();
        $this->assertTrue($evaluator->evaluate(2));
        $this->assertFalse($evaluator->evaluate(-2));
        //assumed zero is negative 
        $this->assertFalse($evaluator->evaluate(0));
    }
}
