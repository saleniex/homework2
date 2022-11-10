<?php

namespace App\Interfaces;

interface EvaluatorFactoryInterface
{
    /**
     * Figures which evaluation method to use and implements it.
     *
     * @return string
     */
    public function evaluateNumber():string;
}
