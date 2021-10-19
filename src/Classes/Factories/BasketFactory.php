<?php

namespace AcmeWidgetCo\Classes\Factories;

use AcmeWidgetCo\Classes\Basket;
use AcmeWidgetCo\Classes\ProductCatalogue;
use AcmeWidgetCo\Classes\Strategies\SimpleDeliveryChargeRulesStrategy;
use AcmeWidgetCo\Classes\Strategies\SimpleOffersStrategy;

class BasketFactory
{
    /**
     * @return \app\Classes\Basket
     */
    public function createBasket(): Basket
    {
        $basket = new Basket();
        $basket->setProductCatalogue(new ProductCatalogue())
            ->setDeliveryChargeRules(new SimpleDeliveryChargeRulesStrategy())
            ->setOffers(new SimpleOffersStrategy());

        return $basket;
    }
}