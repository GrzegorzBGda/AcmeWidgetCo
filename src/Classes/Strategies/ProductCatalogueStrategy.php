<?php

namespace AcmeWidgetCo\Classes\Strategies;

use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueDataStructure;
use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueStrategy;
use Exception;

class ProductCatalogueStrategy implements iProductCatalogueStrategy
{
    /**
     * @param string $productCode
     * @param iProductCatalogueDataStructure $productCatalogueDataStructure
     * @return array
     * @throws Exception
     */
    public function getProductByCode(string $productCode, iProductCatalogueDataStructure $productCatalogueDataStructure): array
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
     * @param iProductCatalogueDataStructure $productCatalogueDataStructure
     * @return int
     * @throws Exception
     */
    public function getProductPriceByCode(string $productCode, iProductCatalogueDataStructure $productCatalogueDataStructure): int
    {
        return $this->getProductByCode($productCode, $productCatalogueDataStructure)['price'];
    }
}