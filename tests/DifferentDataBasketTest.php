<?php

declare(strict_types=1);

use AcmeWidgetCo\Classes\DifferentProductCatalogueDataStructure;
use AcmeWidgetCo\Classes\Factories\BasketFactory;
use PHPUnit\Framework\TestCase;

class DifferentDataBasketTest extends TestCase
{
    /**
     * @covers \AcmeWidgetCo\Classes\Basket::add
     */
    public function testShouldAddProductsToBasket(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createDifferentDataBasket();
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_RED_WIDGET);
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_GREEN_WIDGET);
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_BLUE_WIDGET);

        self::assertCount(
            3,
            $basket->getProducts(),
            "Expected product count does not match"
        );

        self::assertContains(
            "DR01",
            $basket->getProducts(),
            "Basket does not contain product with code R01"
        );
        self::assertContains(
            "DG01",
            $basket->getProducts(),
            "Basket does not contain product with code G01"
        );
        self::assertContains(
            "DB01",
            $basket->getProducts(),
            "Basket does not contain product with code B01"
        );
    }


    /**
     * @covers \AcmeWidgetCo\Classes\Basket::total()
     * @throws \Exception
     */
    public function testShouldCalculateTotalForProductsDB01AndDG01(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createDifferentDataBasket();
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_RED_WIDGET);
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_GREEN_WIDGET);

        self::assertEquals(155.2, $basket->total());
    }


    /**
     * @covers \AcmeWidgetCo\Classes\Basket::total()
     * @throws \Exception
     */
    public function testShouldCalculateTotalForProductsDR01AnDDR01(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createDifferentDataBasket();
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_RED_WIDGET);
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_RED_WIDGET);

        self::assertEquals(242.26, $basket->total());
    }


    /**
     * @covers \AcmeWidgetCo\Classes\Basket::total()
     * @throws \Exception
     */
    public function testShouldCalculateTotalForProductsDR01AnDG01(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createDifferentDataBasket();
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_RED_WIDGET);
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_GREEN_WIDGET);

        self::assertEquals(155.2, $basket->total());
    }


    /**
     * @covers \AcmeWidgetCo\Classes\Basket::total()
     * @throws \Exception
     */
    public function testShouldCalculateTotalForProductsDB01AndDB01AndDR01AndDR01AndDR01(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createDifferentDataBasket();
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_BLUE_WIDGET);
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_BLUE_WIDGET);
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_RED_WIDGET);
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_RED_WIDGET);
        $basket->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_RED_WIDGET);


        self::assertEquals(373.8, $basket->total());
    }
}