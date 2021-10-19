<?php

namespace app\Classes\Factories;

use app\Classes\Basket;
use app\Classes\ProductCatalogue;
use app\Classes\Strategies\SimpleDeliveryChargeRulesStrategy;
use app\Classes\Strategies\SimpleOffersStrategy;

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