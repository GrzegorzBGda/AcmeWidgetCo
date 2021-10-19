<?php

namespace AcmeWidgetCo\Classes\Interfaces;

use AcmeWidgetCo\Classes\ProductCatalogue;

interface iOffersStrategy
{
    /**
     * @param array $products
     * @param \app\Classes\ProductCatalogue $productsCatalogue
     * @return float
     */
    public function total(array $products, ProductCatalogue $productsCatalogue): float;
}