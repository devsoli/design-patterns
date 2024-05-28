<?php

namespace Creational\FactoryMethod;

class PayPalFactory implements PaymentMethodFactory
{
    public function __construct(
        private readonly string $email,
        private readonly string $password
    )
    {
    }

    public function createPaymentMethod(): PaymentMethod
    {
       return new PayPal($this->email,$this->password);
    }
}