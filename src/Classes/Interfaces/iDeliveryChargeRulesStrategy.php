<?php

namespace AcmeWidgetCo\Classes\Interfaces;

interface iDeliveryChargeRulesStrategy
{
    /**
     * @param float $total
     * @return float
     */
    public function getDeliveryCharge(float $total): float;
}