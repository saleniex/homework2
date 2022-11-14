<?php

namespace App;

use PHPUnit\Framework\TestCase;

class EvaluatorControllerTest extends TestCase
{
    public function testEvaluate()
    {
        $evaluator = new EvaluatorController(3, 'is-even');
        $this->assertSame('3 is odd', $evaluator->completeEvaluation());
        $evaluator = new EvaluatorController(4, 'is-even');
        $this->assertSame('4 is even', $evaluator->completeEvaluation());
        $evaluator = new EvaluatorController(4, 'is-positive');
        $this->assertSame('4 is positive', $evaluator->completeEvaluation());
        $evaluator = new EvaluatorController(0, 'is-positive');
        $this->assertSame('0 is negative', $evaluator->completeEvaluation());
        $evaluator = new EvaluatorController(0, 'is-zero');
        $this->assertSame('0 is zero', $evaluator->completeEvaluation());
        $evaluator = new EvaluatorController(-1, 'is-zero');
        $this->assertSame('-1 is not zero', $evaluator->completeEvaluation());
    }
}
