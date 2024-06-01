<?php

namespace Structural\Adaptor;

class PaymentGateway
{
    public function makePayment(float $amount): void
    {
        echo "Payment of {$amount} using third-party payment gateway\n";
    }
}