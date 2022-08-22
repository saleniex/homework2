<?php
declare(strict_types=1);

namespace App\Exceptions;

class InvalidNumberEvaluatorParameterException extends \Exception {
    public function __construct($message = null)
    {
        if (!$message) {
            throw new $this("Invalid number provided");
        }

        parent::__construct($message);
    }

}