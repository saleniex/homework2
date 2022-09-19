<?php

namespace App;

use PHPUnit\Framework\TestCase;

use App\Formaters\EvenNumberFormater;

class EvenNumberFormaterTest extends TestCase
{
    public function testEvaluate()
    {
        $formater = new EvenNumberFormater();
        $this->assertSame($formater->format(2,true),"2 is even");
        $this->assertSame($formater->format(2,false),"2 is odd");        
        $this->assertSame($formater->format(-1,true),"-1 is even");
        $this->assertSame($formater->format(-1,false),"-1 is odd");        
    }
}
