<?php

namespace Structural\Adaptor;

class PaymentGatewayAdaptor implements Payment
{
    public function __construct(private PaymentGateway $paymentGateway)
    {
    }

    public function processPayment(float $amount): void
    {
        $this->paymentGateway->makePayment($amount);
    }
}