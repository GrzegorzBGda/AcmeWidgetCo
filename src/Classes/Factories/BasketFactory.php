<?php

namespace AcmeWidgetCo\Classes\Factories;

use AcmeWidgetCo\Classes\Basket;
use AcmeWidgetCo\Classes\ProductCatalogue;
use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;
use AcmeWidgetCo\Classes\Strategies\DeliveryChargeRulesStrategy;
use AcmeWidgetCo\Classes\Strategies\OffersStrategy;
use AcmeWidgetCo\Classes\Strategies\ProductCatalogueStrategy;

class BasketFactory
{
    /**
     * @return \AcmeWidgetCo\Classes\Basket
     */
    public function createBasket(): Basket
    {
        $basket = new Basket();
        $basket
            ->setProductCatalogue(new ProductCatalogue(new ProductCatalogueStrategy(new ProductCatalogueDataStructure())))
            ->setDeliveryChargeRulesStrategy(new DeliveryChargeRulesStrategy())
            ->setOffersStrategy(new OffersStrategy());

        return $basket;
    }
}