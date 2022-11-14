<?php

namespace App;


class ZeroNumberEvaluator implements NumberEvaluatorInterface
{
    public function evaluate(int $digit): bool
    {
        return $digit === 0;
    }
}