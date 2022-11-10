<?php

namespace App\Evaluators;

use App\Interfaces\NumberEvaluatorInterface;

/**
 * Evaluates whether digit is even or odd
 */
class EvenNumberEvaluator implements NumberEvaluatorInterface
{
    public function evaluate(int $digit): bool
    {
        return $digit % 2 === 0;
    }
}
