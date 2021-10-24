<?php


namespace AcmeWidgetCo\Classes\Interfaces;


use AcmeWidgetCo\Classes\ProductCatalogue;

interface iProductCatalogueFactory
{
    /**
     * @return ProductCatalogue
     */
    public function createProductCatalogue(): iProductCatalogue;

    /**
     * @return ProductCatalogue
     */
    public function createDifferentDataProductCatalogue(): iProductCatalogue;
}