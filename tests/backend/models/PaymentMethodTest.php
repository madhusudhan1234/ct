<?php

use PHPUnit\Framework\TestCase;
use App\Models\PaymentMethod;

class PaymentMethodTest extends TestCase
{
    public function testCanReturnPaymentMethods() {
        $this->assertCount(2, PaymentMethod::getPaymentMethods());
    }
}