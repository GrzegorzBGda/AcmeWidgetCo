<?php

namespace app\Classes\Strategies;

use app\Classes\Interfaces\iOffersStrategy;
use app\Classes\ProductCatalogue;

class SimpleOffersStrategy implements iOffersStrategy
{

    /**
     * @param array $products
     * @param \app\Classes\ProductCatalogue $productsCatalogue
     * @return float
     * @throws \Exception
     */
    public function total(array $products, ProductCatalogue $productsCatalogue): float
    {
        $total = 0;
        foreach ($products as $productName) {
            $total += $productsCatalogue->getProductPriceByName($productName);
        }

        return $total;
    }
}