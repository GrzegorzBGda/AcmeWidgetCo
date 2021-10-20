<?php

namespace AcmeWidgetCo\Classes\Interfaces;

use AcmeWidgetCo\Classes\Basket;

interface iBasketFactory
{
    /**
     * @return \AcmeWidgetCo\Classes\Basket
     */
    public function createBasket(): Basket;
}