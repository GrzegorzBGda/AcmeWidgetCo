<?php

namespace AcmeWidgetCo\Classes\Strategies;

use AcmeWidgetCo\Classes\Basket;
use AcmeWidgetCo\Classes\Interfaces\iOffersStrategy;
use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;

class OffersStrategy implements iOffersStrategy
{

    /**
     * @param \AcmeWidgetCo\Classes\Basket $basket
     * @return float
     * @throws \Exception
     */
    public function total(Basket $basket): float
    {
        $total = 0;
        $productsAddedToTotal = [];
        foreach ($basket->getProducts() as $productCode) {
            $productPrice = $basket->getProductsCatalogueStrategy()->getProductPriceByCode($productCode);
            $productsAddedToTotalCount = array_count_values($productsAddedToTotal);

            if ($this->shouldPriceBeDiscounted($productsAddedToTotalCount, $productCode)) {
                $productPrice /= 2;
            }

            $total += $productPrice;
            $productsAddedToTotal[] = $productCode;
        }

        $deliveryCharge = $basket->getDeliveryChargeRulesStrategy()->getDeliveryCharge($total);
        return $this->roundPrice($total + $deliveryCharge);
    }


    /**
     * @param float $price
     * @return float
     */
    private function roundPrice(float $price): float
    {
        return floor(($price) * 100) / 100;
    }


    /**
     * @param array $productsAddedToTotalCount
     * @param string $productCode
     * @return bool
     */
    private function shouldPriceBeDiscounted(array $productsAddedToTotalCount, string $productCode): bool
    {
        if ($productsAddedToTotalCount[$productCode] !== 1) {
            return false;
        }

        if ($productCode !== ProductCatalogueDataStructure::PRODUCT_RED_WIDGET) {
            return false;
        }

        return true;
    }
}