<?php

use PHPUnit\Framework\TestCase;

class ComplexTest  extends TestCase
{
    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf(
            Complex::class,
            new Complex(1, 2)
        );
    }

    public function testCanAdd(): void
    {
        $a = new Complex(1, 2);
        $b = new Complex(3, 4);
        $c = $a->add($b);
        $this->assertEquals($c->getReal(), 4);
        $this->assertEquals($c->getComplex(), 6);
    }

    public function testCanSubtract(): void
    {
        $a = new Complex(1, 2);
        $b = new Complex(3, 4);
        $c = $a->subtract($b);
        $this->assertEquals($c->getReal(), -2);
        $this->assertEquals($c->getComplex(), -2);
    }

    public function testCanMultiply(): void
    {
        $a = new Complex(1, 2);
        $b = new Complex(3, 4);
        $c = $a->multiply($b);
        $this->assertEquals($c->getReal(), -5);
        $this->assertEquals($c->getComplex(), 10);
    }

    public function testCanDivide(): void
    {
        $a = new Complex(1, 2);
        $b = new Complex(3, 4);
        $c = $a->divide($b);
        $this->assertEquals($c->getReal(), 0.44);
        $this->assertEquals($c->getComplex(), 0.08);
    }

    public function testCannotDivideByZero(): void
    {
        $this->expectException(Exception::class);

        $a = new Complex(1, 2);
        $b = new Complex(0, 0);
        $c = $a->divide($b);
    }
}