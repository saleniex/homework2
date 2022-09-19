<?php

namespace App\Traits;


/**
 * returns existing instance by name or callback for a new instance
 */
trait NamedInstance
{

    static $instances=[];

    public function getInstance(string $name,Callable $createInstance)
    {
        if (!isset(static::$instances[$name])) {
            static::$instances[$name] = $createInstance($name);
        }
        
        return static::$instances[$name]??null;
    }
}