<?php

namespace Creational\FactoryMethod;

class CreditCard implements PaymentMethod
{
    public function __construct(
        private readonly string $cardNumber,
        private readonly string $cvv2,
        private readonly string $expireMonth,
    ) {
    }

    public function processPayment(float $amount)
    {
        //process credit card Payment
        echo 'processing payment of credit card ' . $this->cardNumber . PHP_EOL;
    }
}