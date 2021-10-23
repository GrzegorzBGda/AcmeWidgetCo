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

        self::assertEquals(4.95, $deliveryChargeRulesStrategy->getDeliveryCharge(49));
        self::assertEquals(2.95, $deliveryChargeRulesStrategy->getDeliveryCharge(89));
        self::assertEquals(0, $deliveryChargeRulesStrategy->getDeliveryCharge(91));
    }
}