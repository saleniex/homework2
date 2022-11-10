<?php

namespace App;

use PHPUnit\Framework\TestCase;

class NumberEvaluatorTest extends TestCase
{
    public function testEvaluate()
    {
        $evaluator = new NumberEvaluator();
        // if even
        $this->assertTrue($evaluator->evaluate(2, $evaluator::EVALUATE_IF_EVEN));
        $this->assertTrue($evaluator->evaluate(16, $evaluator::EVALUATE_IF_EVEN));

        $this->assertFalse($evaluator->evaluate(1, $evaluator::EVALUATE_IF_EVEN));
        $this->assertFalse($evaluator->evaluate(3, $evaluator::EVALUATE_IF_EVEN));

        // if positive
        $this->assertTrue($evaluator->evaluate(2, $evaluator::EVALUATE_IF_POSITIVE));

        $this->assertFalse($evaluator->evaluate(-1, $evaluator::EVALUATE_IF_POSITIVE));
        $this->assertFalse($evaluator->evaluate(0, $evaluator::EVALUATE_IF_POSITIVE));

        // if zero
        $this->assertTrue($evaluator->evaluate(0, $evaluator::EVALUATE_IF_ZERO));

        $this->assertFalse($evaluator->evaluate(-5, $evaluator::EVALUATE_IF_ZERO));
        $this->assertFalse($evaluator->evaluate(4, $evaluator::EVALUATE_IF_ZERO));
    }
}
