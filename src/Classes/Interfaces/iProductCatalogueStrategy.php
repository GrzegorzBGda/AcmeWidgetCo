<?php

namespace AcmeWidgetCo\Classes\Interfaces;

use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;

interface iProductCatalogueStrategy
{
    /**
     * @param string $productCode
     * @param \AcmeWidgetCo\Classes\ProductCatalogueDataStructure $productCatalogueDataStructure
     * @return array
     */
    public function getProductByCode(string $productCode, ProductCatalogueDataStructure $productCatalogueDataStructure): array;


    /**
     * @param string $productCode
     * @param \AcmeWidgetCo\Classes\ProductCatalogueDataStructure $productCatalogueDataStructure
     * @return float
     */
    public function getProductPriceByCode(string $productCode, ProductCatalogueDataStructure $productCatalogueDataStructure): float;
}