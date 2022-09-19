<?php

namespace App\Formaters;

/**
 * Formats result is positive or negative
 */
class PositiveNumberFormater extends BaseNumberFormater
{
    protected $results=[
        true => 'positive',
        false => 'negative'
    ];
}