<?php

declare(strict_types=1);


use AcmeWidgetCo\Classes\Factories\BasketFactory;
use AcmeWidgetCo\Classes\Interfaces\iBasket;
use PHPUnit\Framework\TestCase;

class BasketFactoryTest extends TestCase
{
    /**
     * @covers \AcmeWidgetCo\Classes\Factories\BasketFactory::createBasket()
     */
    public function testShouldCreateBasketObject(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createBasket();

        self::assertInstanceOf(iBasket::class, $basket, "Basket is not instance of iBasket");
    }
}