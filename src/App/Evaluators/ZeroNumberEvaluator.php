<?php

namespace App\Evaluators;

/**
 * Evaluates whether digit is zero 
 */
class ZeroNumberEvaluator implements NumberEvaluatorInterface
{
    public function evaluate(int $digit): bool
    {
        return $digit === 0;
    }
}