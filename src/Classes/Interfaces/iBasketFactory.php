<?php

namespace AcmeWidgetCo\Classes\Interfaces;


interface iBasketFactory
{
    /**
     * @return iBasket
     */
    public function createBasket(): iBasket;
}