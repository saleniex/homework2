<?php

namespace App\Traits;


/**
 * returns existing instance by name or callback for a new instance
 */
trait NamedInstances
{

    //stores instances by name
    static $instances=[];

    public function getNamedInstance(string $name,Callable $createInstance)
    {
        if (!isset(static::$instances[$name])) {
            static::$instances[$name] = $createInstance($name);
        }

        return static::$instances[$name]??null;
    }
}