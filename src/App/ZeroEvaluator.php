<?php

namespace App;

/**
 * Evaluates whether digit is Zero or not
 */
class ZeroEvaluator implements NumberEvaluatorInterface
{
    public function evaluate(int $digit): bool
    {
        return $digit === 0;
    }
}