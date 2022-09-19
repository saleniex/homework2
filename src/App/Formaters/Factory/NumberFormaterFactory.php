<?php

namespace App\Formaters\Factory;

use App\Formaters\Factory\NumberFormaterFactoryInterface;
use App\Formaters\ZeroNumberFormater;
use App\Formaters\EvenNumberFormater;
use App\Formaters\PositiveNumberFormater;
use App\Traits\NamedInstance;


/**
 * Create number formater instance by name
 */
class NumberFormaterFactory implements NumberFormaterFactoryInterface
{
    use NamedInstance;

    protected $formaters = [
        'positive' => PositiveNumberFormater::class,
        'even' => EvenNumberFormater::class,            
        'zero'=> ZeroNumberFormater::class,            
    ];

    public  function __construct(array $evaluators=null)
    {
        if (isset($formaters)) {
            $this->evaluators =  $evaluators;
        }   
    }

    public function formater(string $method)
    {
        return $this->getInstance( $method,
            function (string $name) {

                return isset($this->formaters[$name]) ?  new $this->formaters[$name]() : null;
            }
        );
    }
}
