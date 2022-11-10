<?php

namespace App;

use App\Evaluators\EvenNumberEvaluator;
use App\Evaluators\PositiveNumberEvaluator;
use App\Evaluators\ZeroEvaluator;
use PHPUnit\Framework\TestCase;

class NumberEvaluatorTest extends TestCase
{
    public function testEvaluateEven()
    {
        $evaluator = new EvenNumberEvaluator();
        $this->assertTrue($evaluator->evaluate(2));
        $this->assertTrue($evaluator->evaluate(16));
        $this->assertFalse($evaluator->evaluate(1));
        $this->assertFalse($evaluator->evaluate(3));
    }

    public function testEvaluatePositive()
    {
        $evaluator = new PositiveNumberEvaluator();
        $this->assertTrue($evaluator->evaluate(1));
        $this->assertTrue($evaluator->evaluate(150));
        $this->assertFalse($evaluator->evaluate(-1));
        $this->assertFalse($evaluator->evaluate(-200000));
    }

    public function testEvaluateZero()
    {
        $evaluator = new ZeroEvaluator();
        $this->assertTrue($evaluator->evaluate(0));
        $this->assertFalse($evaluator->evaluate(10));
        $this->assertFalse($evaluator->evaluate(-10));
    }
}
