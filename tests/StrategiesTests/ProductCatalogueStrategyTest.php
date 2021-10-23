<?php

declare(strict_types=1);


use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;
use AcmeWidgetCo\Classes\Strategies\ProductCatalogueStrategy;
use PHPUnit\Framework\TestCase;

class ProductCatalogueStrategyTest extends TestCase
{
    /**
     * @covers \AcmeWidgetCo\Classes\Strategies\ProductCatalogueStrategy::getProductByCode()
     * @throws \Exception
     */
    public function testShouldCheckGettingProductR01ByType(): void
    {
        $productCatalogueDataStructure = new ProductCatalogueDataStructure();
        $productCatalogueStrategy = new ProductCatalogueStrategy();

        $productData = ['product' => 'Red Widget', 'code' => 'R01', 'price' => 32.95];
        $productFromCatalogue = $productCatalogueStrategy->getProductByCode(
            ProductCatalogueDataStructure::PRODUCT_RED_WIDGET,
            $productCatalogueDataStructure
        );

        self::assertEquals(
            $productData,
            $productFromCatalogue
        );
    }

    /**
     * @covers \AcmeWidgetCo\Classes\Strategies\ProductCatalogueStrategy::getProductByCode()
     * @throws \Exception
     */
    public function testShouldCheckGettingProductG01ByType(): void
    {
        $productCatalogueDataStructure = new ProductCatalogueDataStructure();
        $productCatalogueStrategy = new ProductCatalogueStrategy();

        $productData = ['product' => 'Green Widget', 'code' => 'G01', 'price' => 24.95];
        $productFromCatalogue = $productCatalogueStrategy->getProductByCode(
            ProductCatalogueDataStructure::PRODUCT_GREEN_WIDGET,
            $productCatalogueDataStructure
        );

        self::assertEquals(
            $productData,
            $productFromCatalogue
        );
    }

    /**
     * @covers \AcmeWidgetCo\Classes\Strategies\ProductCatalogueStrategy::getProductByCode()
     * @throws \Exception
     */
    public function testShouldCheckGettingProductB01ByType(): void
    {
        $productCatalogueDataStructure = new ProductCatalogueDataStructure();
        $productCatalogueStrategy = new ProductCatalogueStrategy();

        $productData = ['product' => 'Blue Widget', 'code' => 'B01', 'price' => 7.95];
        $productFromCatalogue = $productCatalogueStrategy->getProductByCode(
            ProductCatalogueDataStructure::PRODUCT_BLUE_WIDGET,
            $productCatalogueDataStructure
        );

        self::assertEquals(
            $productData,
            $productFromCatalogue
        );
    }
}