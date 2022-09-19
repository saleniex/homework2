<?php

namespace App\Formaters;

/**
 * Formats result is zero or no-zero
 */
class ZeroNumberFormater extends BaseNumberFormater
{
    protected $results=[
        true => 'zero',
        false => 'no-zero'
    ];
}