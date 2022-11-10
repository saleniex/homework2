<?php

namespace App\Evaluators;

use App\Interfaces\NumberEvaluatorInterface;

/**
 * Evaluates whether digit is Positive or Negative
 */
class PositiveNumberEvaluator implements NumberEvaluatorInterface
{
    public function evaluate(int $digit): bool
    {
        return $digit > 0;
    }
}