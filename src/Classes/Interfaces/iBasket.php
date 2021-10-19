<?php

namespace AcmeWidgetCo\Classes\Interfaces;

interface iBasket
{
    public function add(string $productCode): void;


    public function total(): float;
}