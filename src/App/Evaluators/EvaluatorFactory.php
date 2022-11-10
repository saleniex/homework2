<?php

namespace App\Evaluators;

use App\Interfaces\EvaluatorFactoryInterface;

class EvaluatorFactory implements EvaluatorFactoryInterface
{
    private string $param;
    private int $digit;

    public function __construct(string $param, int $digit)
    {
        $this->param = $param;
        $this->digit = $digit;
    }

    public function evaluateNumber(): string
    {
        switch ($this->param)
        {
            case 'is-even':
                $evenEvaluator = new EvenNumberEvaluator();
                return $evenEvaluator->evaluate($this->digit) ? sprintf('%d is even', $this->digit) : sprintf('%d is odd', $this->digit);
            case 'is-positive':
                $positiveEvaluator = new PositiveNumberEvaluator();
                return $positiveEvaluator->evaluate($this->digit) ? sprintf('%d is positive', $this->digit) : sprintf('%d is negative', $this->digit);
            case 'is-zero':
                $zeroEvaluator = new ZeroEvaluator();
                return $zeroEvaluator->evaluate($this->digit) ? sprintf('%d is zero', $this->digit) : sprintf('%d is not zero', $this->digit);
            default: return sprintf('undefined evaluation for %d', $this->digit);
        }
    }
}
