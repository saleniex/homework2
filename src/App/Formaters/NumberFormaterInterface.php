<?php

namespace App\Formaters;

interface NumberFormaterInterface
{
    /**
     * Performs digit evaluation result formating
     *
     * @param int $digit Digit to evaluate
     * @param bool $result Evaluation result 
     * @return string
     */
    public function format(int $digit,bool $result): string;
}