<?php

namespace AcmeWidgetCo\Classes\Factories;

use AcmeWidgetCo\Classes\DifferentProductCatalogueDataStructure;
use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueFactory;
use AcmeWidgetCo\Classes\ProductCatalogue;
use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;
use AcmeWidgetCo\Classes\Strategies\ProductCatalogueStrategy;

class ProductCatalogueFactory implements iProductCatalogueFactory
{

    /**
     * @return ProductCatalogue
     */
    public function createProductCatalogue(): ProductCatalogue
    {
        return new ProductCatalogue(
            new ProductCatalogueDataStructure(),
            new ProductCatalogueStrategy()
        );
    }

    /**
     * @return ProductCatalogue
     */
    public function createDifferentDataProductCatalogue(): ProductCatalogue
    {
        return new ProductCatalogue(
            new DifferentProductCatalogueDataStructure(),
            new ProductCatalogueStrategy()
        );
    }
}