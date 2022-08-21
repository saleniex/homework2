<?php

namespace App;

use PHPUnit\Framework\TestCase;

class NumberEvaluatorTest extends TestCase
{
    public function testIsEven()
    {
        $this->assertTrue(NumberEvaluator::isEven(0));
        $this->assertTrue(NumberEvaluator::isEven(-4));
        $this->assertFalse(NumberEvaluator::isEven(1));
        $this->assertFalse(NumberEvaluator::isEven(3));
    }

    public function testIsOdd()
    {
        $this->assertTrue(NumberEvaluator::isOdd(3));
        $this->assertTrue(NumberEvaluator::isOdd(1));
        $this->assertFalse(NumberEvaluator::isOdd(0));
        $this->assertFalse(NumberEvaluator::isOdd(4));
    }

    public function testIsPositive()
    {
        $this->assertTrue(NumberEvaluator::isPositive(3));
        $this->assertTrue(NumberEvaluator::isPositive(1));
        $this->assertFalse(NumberEvaluator::isPositive(0));
        $this->assertFalse(NumberEvaluator::isPositive(-3));
    }

    public function testIsNegative()
    {
        $this->assertTrue(NumberEvaluator::isNegative(-2));
        $this->assertTrue(NumberEvaluator::isNegative(-20));
        $this->assertFalse(NumberEvaluator::isNegative(0));
        $this->assertFalse(NumberEvaluator::isNegative(5));
    }

    public function testIsZero()
    {
        $this->assertTrue(NumberEvaluator::isZero(0));
        $this->assertFalse(NumberEvaluator::isZero(-20));
        $this->assertFalse(NumberEvaluator::isZero(4));
        $this->assertFalse(NumberEvaluator::isZero(3));
    }
}
