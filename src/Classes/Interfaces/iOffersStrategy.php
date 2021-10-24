<?php

namespace AcmeWidgetCo\Classes\Interfaces;

use AcmeWidgetCo\Classes\Basket;

interface iOffersStrategy
{
    /**
     * @param Basket $basket
     * @return float
     */
    public function total(Basket $basket): float;
}