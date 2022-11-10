<?php

namespace App;

/**
 * Evaluates whether digit is even, positive or zero
 */
class NumberEvaluator implements NumberEvaluatorInterface
{
    const EVALUATE_IF_EVEN = 1;
    const EVALUATE_IF_POSITIVE = 2;
    const EVALUATE_IF_ZERO = 3;

    public function evaluate(int $digit, int $evaluationType = self::EVALUATE_IF_EVEN): bool
    {
        switch ($evaluationType) {
            case self::EVALUATE_IF_EVEN:
                return $digit % 2 === 0;
            case self::EVALUATE_IF_POSITIVE:
                return $digit > 0;
            case self::EVALUATE_IF_ZERO:
                return $digit === 0;
            default: return false;
        }
    }
}