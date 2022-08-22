<?php
declare(strict_types=1);

namespace App\Exceptions;

use App\Enums\NumberEvaluatorMethods;

class InvalidNumberEvaluatorMethodException extends \Exception
{
    public function __construct($message = null)
    {
        if (!$message) {
            throw new $this(sprintf("Invalid number evaluator method, available methods: %s",
                implode(", ", array_column(NumberEvaluatorMethods::cases(), 'value'))));
        }

        parent::__construct($message);
    }
}