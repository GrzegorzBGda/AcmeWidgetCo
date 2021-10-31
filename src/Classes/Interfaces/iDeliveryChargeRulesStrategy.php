<?php

namespace AcmeWidgetCo\Classes\Interfaces;

interface iDeliveryChargeRulesStrategy
{
    /**
     * @param int $total
     * @return int
     */
    public function getDeliveryCharge(int $total): int;
}