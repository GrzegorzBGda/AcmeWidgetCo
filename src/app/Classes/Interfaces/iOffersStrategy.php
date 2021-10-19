<?php

namespace app\Classes\Interfaces;

use app\Classes\ProductCatalogue;

interface iOffersStrategy
{
    /**
     * @param array $products
     * @param \app\Classes\ProductCatalogue $productsCatalogue
     * @return float
     */
    public function total(array $products, ProductCatalogue $productsCatalogue): float;
}