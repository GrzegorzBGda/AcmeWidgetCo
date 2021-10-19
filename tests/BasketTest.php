<?php

declare(strict_types=1);

use AcmeWidgetCo\Classes\Factories\BasketFactory;
use AcmeWidgetCo\Classes\ProductCatalogue;
use PHPUnit\Framework\TestCase;

class BasketTest extends TestCase
{
    public function testShouldAddProductsToBasket(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createBasket();
        $basket->add(ProductCatalogue::PRODUCT_RED_WIDGET);
        $basket->add(ProductCatalogue::PRODUCT_GREEN_WIDGET);
        $basket->add(ProductCatalogue::PRODUCT_BLUE_WIDGET);

        self::assertCount(
            3,
            $basket->getProducts(),
            "Expected product count does not match"
        );

        self::assertContains(
            "R01",
            $basket->getProducts(),
            "Basket does not contain product with code R01"
        );
        self::assertContains(
            "G01",
            $basket->getProducts(),
            "Basket does not contain product with code G01"
        );
        self::assertContains(
            "B01",
            $basket->getProducts(),
            "Basket does not contain product with code B01"
        );
    }


    /**
     * @throws \Exception
     */
    public function testShouldCalculateTotalForProductsB01AndG01(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createBasket();
        $basket->add(ProductCatalogue::PRODUCT_GREEN_WIDGET);
        $basket->add(ProductCatalogue::PRODUCT_BLUE_WIDGET);

        self::assertEquals(37.85, $basket->total());
    }

    /**
     * @throws \Exception
     */
    public function testShouldCalculateTotalForProductsR01AndR01(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createBasket();
        $basket->add(ProductCatalogue::PRODUCT_RED_WIDGET);
        $basket->add(ProductCatalogue::PRODUCT_RED_WIDGET);

        self::assertEquals(54.37, $basket->total());
    }

    /**
     * @throws \Exception
     */
    public function testShouldCalculateTotalForProductsR01AndG01(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createBasket();
        $basket->add(ProductCatalogue::PRODUCT_RED_WIDGET);
        $basket->add(ProductCatalogue::PRODUCT_GREEN_WIDGET);

        self::assertEquals(60.85, $basket->total());
    }

    /**
     * @throws \Exception
     */
    public function testShouldCalculateTotalForProductsB01AndB01AndR01AndR01AndR01(): void
    {
        $basketFactory = new BasketFactory();
        $basket = $basketFactory->createBasket();
        $basket->add(ProductCatalogue::PRODUCT_BLUE_WIDGET);
        $basket->add(ProductCatalogue::PRODUCT_BLUE_WIDGET);
        $basket->add(ProductCatalogue::PRODUCT_RED_WIDGET);
        $basket->add(ProductCatalogue::PRODUCT_RED_WIDGET);
        $basket->add(ProductCatalogue::PRODUCT_RED_WIDGET);

        self::assertEquals(98.27, $basket->total());
    }
}