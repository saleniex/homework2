<?php

namespace App\Formaters\Factory;


interface NumberFormaterFactoryInterface
{
    /**
     * Instancing evaluator by method name
     *
     * @param string $method Evaluator method name
     * @return NumberFormaterInterface|null
     */
    public function formater(string $method);
}