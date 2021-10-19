<?php

namespace AcmeWidgetCo\Classes;

use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueStrategy;

class ProductCatalogue implements iProductCatalogueStrategy
{

    /**
     * @var \AcmeWidgetCo\Classes\Interfaces\iProductCatalogueStrategy
     */
    private iProductCatalogueStrategy $productCatalogueStrategy;


    public function __construct(iProductCatalogueStrategy $productCatalogueStrategy)
    {
        $this->productCatalogueStrategy = $productCatalogueStrategy;
    }


    /**
     * @param string $productCode
     * @return array
     */
    public function getProductByCode(string $productCode): array
    {
        return $this->productCatalogueStrategy->getProductByCode($productCode);
    }


    /**
     * @param string $productCode
     * @return float
     */
    public function getProductPriceByCode(string $productCode): float
    {
        return $this->productCatalogueStrategy->getProductPriceByCode($productCode);
    }


    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}