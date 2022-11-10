<?php

namespace App;

interface NumberEvaluatorInterface
{
    /**
     * Performs digit evaluation
     *
     * @param int $digit
     * @param int $evaluationType
     *
     * @return bool
     */
    public function evaluate(int $digit, int $evaluationType): bool;
}