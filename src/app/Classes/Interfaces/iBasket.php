<?php

namespace app\Classes\Interfaces;

interface iBasket
{
    public function add(string $productCode): void;


    public function total(): float;
}