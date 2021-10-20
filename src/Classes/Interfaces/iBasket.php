<?php

namespace AcmeWidgetCo\Classes\Interfaces;

interface iBasket
{
    /**
     * @param string $productCode
     */
    public function add(string $productCode): void;


    /**
     * @return float
     */
    public function total(): float;


    /**
     * @return array
     */
    public function getProducts(): array;
}