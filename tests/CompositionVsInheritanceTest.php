<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class CompositionVsInheritanceTest extends TestCase
{
    public function testAB(): void
    {
        $a = new A();
        self::assertEquals('AAA', $a->getString());

        $b = new B(); //inheritance lets you overwrite protected methods in class A
        self::assertEquals('BAA', $b->getString());

        $c = new C((new A())); //composition lets you change only public methods in class A
        self::assertEquals("C-AAA-C", $c->getString());

        $c = new C((new B())); //but composition lets you change decorated object
        self::assertEquals("C-BAA-C", $c->getString());
    }
}

class A
{
    public function getString(): string
    {
        return $this->getA() . $this->getAA();
    }


    protected function getA(): string
    {
        return "A";
    }


    protected function getAA(): string
    {
        return "AA";
    }
}

class B extends A
{
    protected function getA(): string
    {
        return "B";
    }
}

class C
{
    private A $a;


    public function __construct(A $a)
    {
        $this->a = $a;
    }


    public function getString(): string
    {
        return $this->getC() . '-' . $this->a->getString() . '-' . $this->getC();
    }


    protected function getC(): string
    {
        return "C";
    }
}
