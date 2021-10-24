<?php


namespace AcmeWidgetCo\Classes\Interfaces;


interface iBasketComposite
{
    /**
     * @param iBasket $basket
     * @return $this
     */
    public function addBasket(iBasket $basket): self;

    /**
     * @return float
     */
    public function total(): float;
}