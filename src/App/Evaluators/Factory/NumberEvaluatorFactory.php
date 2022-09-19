<?php

namespace App\Evaluators\Factory;

use App\Evaluators\Factory\NumberEvaluatorFactoryInterface;
use App\Evaluators\NumberEvaluatorInterface;
use App\Evaluators\ZeroNumberEvaluator;
use App\Evaluators\EvenNumberEvaluator;
use App\Evaluators\PositiveNumberEvaluator;
use App\Traits\NamedInstances;


/**
 * Create number evaluator instance by name
 */
class NumberEvaluatorFactory implements NumberEvaluatorFactoryInterface
{
    use NamedInstances;

    protected $evaluators = [
        'positive' => PositiveNumberEvaluator::class,
        'even' => EvenNumberEvaluator::class,            
        'zero'=> ZeroNumberEvaluator::class,            
    ];

    public  function __construct(array $evaluators=null)
    {
        if (isset($evaluators)) {
            $this->evaluators =  $evaluators;
        }   
    }

    public function evaluator(string $method): ?NumberEvaluatorInterface
    {
        return $this->getNamedInstance( $method,
            function (string $name) {

                return isset($this->evaluators[$name]) ?  new $this->evaluators[$name]() : null;
            }
        );
    }
}
