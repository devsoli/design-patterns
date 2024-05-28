<?php

namespace Creational\FactoryMethod;

class CreditCardFactory implements PaymentMethodFactory
{
    public function __construct(
        private readonly string $cardNumber,
        private readonly string $cvv2,
        private readonly string $expireMonth,
    ) {
    }

    public function createPaymentMethod(): PaymentMethod
    {
        return new CreditCard($this->cardNumber, $this->cvv2, $this->expireMonth);
    }
}