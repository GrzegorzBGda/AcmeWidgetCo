<?php

namespace AcmeWidgetCo\Classes\Strategies;

use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueStrategy;
use AcmeWidgetCo\Classes\ProductCatalogue;
use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;

class ProductCatalogueStrategy implements iProductCatalogueStrategy
{
    private ProductCatalogue $productCatalogueDataStructure;


    /**
     * @param \AcmeWidgetCo\Classes\ProductCatalogueDataStructure $productCatalogueDataStructure
     */
    public function __construct(ProductCatalogueDataStructure $productCatalogueDataStructure)
    {
        $this->productCatalogueDataStructure = $productCatalogueDataStructure;
    }


    /**
     * @param string $productCode
     * @return array
     * @throws \Exception
     */
    public function getProductByCode(string $productCode): array
    {
        $foundProduct = null;
        foreach ($this->productCatalogueDataStructure->getProducts() as $product) {
            if ($product['code'] === $productCode) {
                $foundProduct = $product;
            }
        }
        if (!$foundProduct) {
            throw new \Exception('There is no product with code: ' . $productCode);
        }

        return $foundProduct;
    }


    /**
     * @param string $productCode
     * @return float
     * @throws \Exception
     */
    public function getProductPriceByCode(string $productCode): float
    {
        return $this->getProductByCode($productCode)['price'];
    }
}