<?php

namespace App\Evaluators;

/**
 * Evaluates whether digit is positive
 * assumed zero number is negative 
 */
class PositiveNumberEvaluator implements NumberEvaluatorInterface
{
    public function evaluate(int $digit): bool
    {
        return $digit > 0;
    }
}