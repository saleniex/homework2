<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ZeroEvaluatorTest extends TestCase
{
    public function testEvaluate()
    {
        $evaluator = new ZeroEvaluator();
        $this->assertTrue($evaluator->evaluate(0));
        $this->assertFalse($evaluator->evaluate(10));
        $this->assertFalse($evaluator->evaluate(-10));
    }
}
