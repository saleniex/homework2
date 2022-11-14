<?php

namespace App;


class PositiveNumberEvaluator implements NumberEvaluatorInterface
{
    public function evaluate(int $digit): bool
    {
        return $digit > 0;
    }
}