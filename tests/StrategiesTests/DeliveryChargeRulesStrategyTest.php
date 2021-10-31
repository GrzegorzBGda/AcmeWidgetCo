<?php

declare(strict_types=1);

use AcmeWidgetCo\Classes\Strategies\DeliveryChargeRulesStrategy;
use PHPUnit\Framework\TestCase;

class DeliveryChargeRulesStrategyTest extends TestCase
{
    /**
     * @covers \AcmeWidgetCo\Classes\Strategies\DeliveryChargeRulesStrategy::getDeliveryCharge()
     */
    public function testShouldCheckDeliveryPrices(): void
    {
        $deliveryChargeRulesStrategy = new DeliveryChargeRulesStrategy();

        self::assertEquals(495, $deliveryChargeRulesStrategy->getDeliveryCharge(4900));
        self::assertEquals(295, $deliveryChargeRulesStrategy->getDeliveryCharge(8900));
        self::assertEquals(0, $deliveryChargeRulesStrategy->getDeliveryCharge(9100));
    }
}