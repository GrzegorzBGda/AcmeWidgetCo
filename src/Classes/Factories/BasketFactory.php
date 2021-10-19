<?php

namespace AcmeWidgetCo\Classes\Factories;

use AcmeWidgetCo\Classes\Basket;
use AcmeWidgetCo\Classes\ProductCatalogue;
use AcmeWidgetCo\Classes\Strategies\DeliveryChargeRulesStrategy;
use AcmeWidgetCo\Classes\Strategies\OffersStrategy;

class BasketFactory
{
    /**
     * @return \AcmeWidgetCo\Classes\Basket
     */
    public function createBasket(): Basket
    {
        $basket = new Basket();
        $basket
            ->setProductCatalogue(new ProductCatalogue())
            ->setDeliveryChargeRulesStrategy(new DeliveryChargeRulesStrategy())
            ->setOffersStrategy(new OffersStrategy());

        return $basket;
    }
}