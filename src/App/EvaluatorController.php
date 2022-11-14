<?php


namespace App;

use mysql_xdevapi\Exception;
use function PHPUnit\Framework\throwException;

class EvaluatorController implements EvaluatorInterface
{

    private int $digit;
    private string $method;

    public function __construct(int $digit, string $method)
    {
        $this->digit = $digit;
        $this->method = $method;
    }

    public function completeEvaluation(): string
    {

        switch ($this->method) {

            case 'is-even':
                $evaluator = new EvenNumberEvaluator();
                return $evaluator->evaluate($this->digit)
                    ? sprintf('%d is even', $this->digit)
                    : sprintf('%d is odd', $this->digit);

            case 'is-positive':
                $evaluator = new PositiveNumberEvaluator();
                return $evaluator->evaluate($this->digit)
                    ? sprintf('%d is positive', $this->digit)
                    : sprintf('%d is negative', $this->digit);

            case 'is-zero':
                $evaluator = new ZeroNumberEvaluator();
                return $evaluator->evaluate($this->digit)
                    ? sprintf('%d is zero', $this->digit)
                    : sprintf('%d is not zero', $this->digit);
            default:
                return sprintf('%s Invalid method provided', $this->method);
        }

    }

}