<?php

declare(strict_types=1);

use AcmeWidgetCo\Classes\StringReverser;
use PHPUnit\Framework\TestCase;

class BasketTest extends TestCase
{
    /**
     * @covers
     */
    public function testShouldReverseString(): void
    {
        $string = "Madam I'm Adam";

        $reversedString = strrev($string);

        $stringReverser = new StringReverser();
        self::assertEquals($reversedString, $stringReverser->reverseString($string));
    }
}