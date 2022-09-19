<?php

namespace App\Formaters;

/**
 * Formats result is even or odd
 */
class BaseNumberFormater implements NumberFormaterInterface
{
    protected $results=[
        true => 'true',
        false => 'false'
    ];

    public function format(int $digit,bool $result): string
    {
        return sprintf("%d is %s", $digit, $this->results[$result]);
    }
}