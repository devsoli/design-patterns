<?php

namespace Structural\Adaptor;

interface Payment
{
    public function processPayment(float $amount): void;
}