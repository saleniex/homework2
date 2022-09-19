<?php

namespace App;

use PHPUnit\Framework\TestCase;

use App\Evaluators\ZeroNumberEvaluator;

class ZeroNumberEvaluatorTest extends TestCase
{
    public function testEvaluate()
    {
        $evaluator = new ZeroNumberEvaluator();
        $this->assertFalse($evaluator->evaluate(2));
        $this->assertFalse($evaluator->evaluate(-2));
        $this->assertTrue($evaluator->evaluate(0));
    }
}
