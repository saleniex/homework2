<?php

namespace App\Formaters;

/**
 * Formats result is even or odd
 */
class EvenNumberFormater extends BaseNumberFormater
{
    protected $results=[
        true => 'even',
        false => 'odd'
    ];
}