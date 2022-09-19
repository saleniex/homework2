<?php

namespace App;

use PHPUnit\Framework\TestCase;

use App\Formaters\PositiveNumberFormater;

class PositiveNumberFormaterTest extends TestCase
{
    public function testEvaluate()
    {
        $formater = new PositiveNumberFormater();
        $this->assertSame($formater->format(2,true),"2 is positive");
        $this->assertSame($formater->format(2,false),"2 is negative");        
        $this->assertSame($formater->format(-1,true),"-1 is positive");
        $this->assertSame($formater->format(-1,false),"-1 is negative");        
    }
}
