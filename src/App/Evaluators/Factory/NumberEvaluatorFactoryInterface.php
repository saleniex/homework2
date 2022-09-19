<?php

namespace App\Evaluators\Factory;


interface NumberEvaluatorFactoryInterface
{
    /**
     * Instancing evaluator by method name
     *
     * @param string $method Evaluator method name
     * @return NumberEvaluatorInterface|null
     */
    public function evaluator(string $method);
}