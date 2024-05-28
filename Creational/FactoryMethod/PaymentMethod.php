<?php

namespace Creational\FactoryMethod;

interface PaymentMethod
{
    public function processPayment(float $amount);
}