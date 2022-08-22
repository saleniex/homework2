<?php
declare(strict_types=1);

namespace App\Services;

use App\Enums\NumberEvaluatorMethods;
use PHPUnit\Framework\TestCase;

class NumberEvaluatorServiceTest extends TestCase
{
    public function testIsEvenIsOddMethods()
    {
        $evaluator = new NumberEvaluatorService(4, NumberEvaluatorMethods::IsEven);
        $this->assertSame("4 is even", $evaluator->evaluate());

        $evaluator = new NumberEvaluatorService(5, NumberEvaluatorMethods::IsOdd);
        $this->assertSame("5 is odd", $evaluator->evaluate());

        $evaluator = new NumberEvaluatorService(0, NumberEvaluatorMethods::IsEven);
        $this->assertSame("0 is even", $evaluator->evaluate());
    }

    public function testIsNegativeMethod()
    {
        $evaluator = new NumberEvaluatorService(-4, NumberEvaluatorMethods::IsNegative);
        $this->assertSame("-4 is negative", $evaluator->evaluate());

        $evaluator = new NumberEvaluatorService(5, NumberEvaluatorMethods::IsNegative);
        $this->assertSame("5 is NOT negative", $evaluator->evaluate());
    }

    public function testIsZeroMethod()
    {
        $evaluator = new NumberEvaluatorService(0, NumberEvaluatorMethods::IsZero);
        $this->assertSame("0 is zero", $evaluator->evaluate());

        $evaluator = new NumberEvaluatorService(5, NumberEvaluatorMethods::IsZero);
        $this->assertSame("5 is NOT zero", $evaluator->evaluate());
    }
}