<?php

namespace AcmeWidgetCo\Classes\Factories;

use AcmeWidgetCo\Classes\Basket;
use AcmeWidgetCo\Classes\Interfaces\iBasketFactory;
use AcmeWidgetCo\Classes\Strategies\DeliveryChargeRulesStrategy;
use AcmeWidgetCo\Classes\Strategies\OffersStrategy;

class BasketFactory implements iBasketFactory
{
    /**
     * @var ProductCatalogueFactory
     */
    private ProductCatalogueFactory $productCatalogueFactory;

    /**
     * BasketFactory constructor.
     */
    public function __construct()
    {
        $this->productCatalogueFactory = new ProductCatalogueFactory();
    }

    /**
     * @return Basket
     */
    public function createBasket(): Basket
    {
        $basket = new Basket();
        $basket
            ->setProductCatalogue($this->productCatalogueFactory->createProductCatalogue())
            ->setDeliveryChargeRulesStrategy(new DeliveryChargeRulesStrategy())
            ->setOffersStrategy(new OffersStrategy());

        return $basket;
    }

    public function createDifferentDataBasket(): Basket
    {
        $basket = new Basket();
        $basket
            ->setProductCatalogue($this->productCatalogueFactory->createDifferentDataProductCatalogue())
            ->setDeliveryChargeRulesStrategy(new DeliveryChargeRulesStrategy())
            ->setOffersStrategy(new OffersStrategy());

        return $basket;
    }
}