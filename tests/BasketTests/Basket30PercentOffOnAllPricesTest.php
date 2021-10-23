<?php

declare(strict_types=1);

use AcmeWidgetCo\Classes\Decorator\BasketDecorator;
use AcmeWidgetCo\Classes\Factories\BasketFactory;
use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;
use PHPUnit\Framework\TestCase;

class Basket30PercentOffOnAllPricesTest extends TestCase
{

    /**
     * @covers \AcmeWidgetCo\Classes\Basket::total()
     * @throws \Exception
     */
    public function testShouldCalculateTotalForProductsB01AndG01With30PercentDiscount(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createBasketWithTotalDiscount();

        $basket->add(ProductCatalogueDataStructure::PRODUCT_GREEN_WIDGET);
        $basket->add(ProductCatalogueDataStructure::PRODUCT_BLUE_WIDGET);

        self::assertEquals(26.50, $basket->total());
    }
}