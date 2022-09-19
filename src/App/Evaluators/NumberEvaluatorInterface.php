<?php

namespace App\Evaluators;

interface NumberEvaluatorInterface
{
    /**
     * Performs digit evaluation
     *
     * @param int $digit Digit to evaluate
     * @return bool
     */
    public function evaluate(int $digit): bool;
}