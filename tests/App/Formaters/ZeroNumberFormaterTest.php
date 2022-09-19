<?php

namespace App;

use PHPUnit\Framework\TestCase;

use App\Formaters\ZeroNumberFormater;

class ZeroNumberFormaterTest extends TestCase
{
    public function testEvaluate()
    {
        $formater = new ZeroNumberFormater();
        $this->assertSame($formater->format(0,true),"0 is zero");
        $this->assertSame($formater->format(0,false),"0 is no-zero");        
    }
}
