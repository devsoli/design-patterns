<?php

namespace Structural\Adaptor;

class PaymentProcessor
{
    public function __construct(private Payment $payment)
    {
    }

    public function process(float $amount)
    {
        //process
        $this->payment->processPayment($amount);
    }
}