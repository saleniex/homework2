<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ZeroNumberEvaluatorTest extends TestCase
{
    public function testEvaluate()
    {
        $evaluator = new ZeroNumberEvaluator();
        $this->assertTrue($evaluator->evaluate(0));
        $this->assertFalse($evaluator->evaluate(1));
        $this->assertFalse($evaluator->evaluate(-3));
    }
}
