<?php

namespace AcmeWidgetCo\Classes\Strategies;

use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueStrategy;
use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;
use Exception;

class ProductCatalogueStrategy implements iProductCatalogueStrategy
{
    /**
     * @param string $productCode
     * @param \AcmeWidgetCo\Classes\ProductCatalogueDataStructure $productCatalogueDataStructure
     * @return array
     * @throws \Exception
     */
    public function getProductByCode(string $productCode, ProductCatalogueDataStructure $productCatalogueDataStructure): array
    {
        foreach ($productCatalogueDataStructure->getProducts() as $product) {
            if ($product['code'] === $productCode) {
                return $product;
            }
        }

        throw new Exception('There is no product with code: ' . $productCode);
    }


    /**
     * @param string $productCode
     * @param \AcmeWidgetCo\Classes\ProductCatalogueDataStructure $productCatalogueDataStructure
     * @return float
     * @throws \Exception
     */
    public function getProductPriceByCode(string $productCode, ProductCatalogueDataStructure $productCatalogueDataStructure): float
    {
        return $this->getProductByCode($productCode, $productCatalogueDataStructure)['price'];
    }
}