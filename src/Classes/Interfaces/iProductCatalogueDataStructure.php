<?php

namespace AcmeWidgetCo\Classes\Interfaces;

interface iProductCatalogueDataStructure
{
    /**
     * @return array
     */
    public function getProducts(): array;


    /**
     * @param array $products
     */
    public function setProducts(array $products): void;
}