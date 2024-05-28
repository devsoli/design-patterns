<?php

namespace Creational\FactoryMethod;

class PayPal implements PaymentMethod
{
    public function __construct(
        private readonly string $email,
        private readonly string $password
    ) {
    }

    public function processPayment(float $amount)
    {
        //process paypal Payment
        echo 'processing payment by paypal method';
    }
}