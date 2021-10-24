<?php

declare(strict_types=1);

use AcmeWidgetCo\Classes\Composite\BasketComposite;
use AcmeWidgetCo\Classes\DifferentProductCatalogueDataStructure;
use AcmeWidgetCo\Classes\Factories\BasketFactory;
use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;
use PHPUnit\Framework\TestCase;

class CountAllBasketsTest extends TestCase
{

    /**
     * @covers BasketComposite::total()
     */
    public function testShouldAddTotalsOfAllBaskets(): void
    {
        $basketFactory = new BasketFactory();

        $basket1 = $basketFactory->createBasket();
        $basket1->add(ProductCatalogueDataStructure::PRODUCT_RED_WIDGET);
        $basket1->add(ProductCatalogueDataStructure::PRODUCT_RED_WIDGET);

        $basket2 = $basketFactory->createBasket();
        $basket2->add(ProductCatalogueDataStructure::PRODUCT_GREEN_WIDGET);
        $basket2->add(ProductCatalogueDataStructure::PRODUCT_BLUE_WIDGET);

        $basket3 = $basketFactory->createDifferentDataBasket();
        $basket3->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_RED_WIDGET);
        $basket3->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_GREEN_WIDGET);
        $basket3->add(DifferentProductCatalogueDataStructure::PRODUCT_DIFFERENT_BLUE_WIDGET);

        $basketComposite = new BasketComposite();
        $basketComposite
            ->addBasket($basket1)
            ->addBasket($basket2)
            ->addBasket($basket3);

        self::assertEquals(160.41, $basketComposite->total());
    }
}