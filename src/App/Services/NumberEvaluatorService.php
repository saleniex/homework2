<?php
declare(strict_types=1);

namespace App\Services;

use App\Enums\NumberEvaluatorMethods;
use App\Interfaces\NumberEvaluatorServiceInterface;
use App\Utils\NumberEvaluator;

class NumberEvaluatorService implements NumberEvaluatorServiceInterface
{
    public function __construct(private int $number, private NumberEvaluatorMethods $method)
    {
    }

    public function evaluate(): string
    {
        return match ($this->method) {
            NumberEvaluatorMethods::IsEven, NumberEvaluatorMethods::IsOdd
                => sprintf('%d is %s', $this->number, NumberEvaluator::isEven($this->number) ? 'even' : 'odd'),
            NumberEvaluatorMethods::IsPositive
                => sprintf('%d is %s', $this->number, NumberEvaluator::isPositive($this->number) ? 'positive' : 'NOT positive'),
            NumberEvaluatorMethods::IsNegative
                => sprintf('%d is %s', $this->number, NumberEvaluator::isNegative($this->number) ? 'negative' : 'NOT negative'),
            NumberEvaluatorMethods::IsZero
                => sprintf('%d is %s', $this->number, NumberEvaluator::isZero($this->number) ? 'zero' : 'NOT zero'),
        };
    }
}