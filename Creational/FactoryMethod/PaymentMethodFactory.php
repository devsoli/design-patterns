<?php

namespace Creational\FactoryMethod;

interface PaymentMethodFactory
{
    public function createPaymentMethod(): PaymentMethod;
}