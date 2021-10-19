<?php

namespace AcmeWidgetCo\Classes\Strategies;

use AcmeWidgetCo\Classes\Interfaces\iOffersStrategy;
use AcmeWidgetCo\Classes\ProductCatalogue;

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
        foreach ($products as $productCode) {
            $total += $productsCatalogue->getProductByCode($productCode)['price'];
        }

        switch ($total) {
            case $total < 50:
                $deliveryCost = 4.95;
                break;
            case $total < 90:
                $deliveryCost = 2.95;
                break;
            case $total >= 90:
                $deliveryCost = 0;
                break;
            default:
                $deliveryCost = 50;
        }

        return $total + $deliveryCost;
    }
}