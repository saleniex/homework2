<?php

namespace App;

use PHPUnit\Framework\TestCase;

use App\Formaters\Factory\NumberFormaterFactory;

use App\Formaters\NumberFormaterInterface;


class NumberFormaterFactoryTest extends TestCase
{

    protected $names= ['zero','positive','even'];

    public function testFactory()
    {
        $factory = new NumberFormaterFactory();

        foreach ($this->names as $name) {
            $formater = $factory->formater($name);
            $this->assertInstanceOf(NumberFormaterInterface::class,$formater);            

            // test single instance
            $this->assertSame( spl_object_id($formater), spl_object_id($factory->formater($name)));        
        }
    }
}
