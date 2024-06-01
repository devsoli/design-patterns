<?php

namespace Structural\Adaptor;

class Client
{

    public static function run(float $amount)
    {
        $paymentGateway = new PaymentGateway();
        $paymentAdaptor = new PaymentGatewayAdaptor($paymentGateway);

        $paymentProcessor = new PaymentProcessor($paymentAdaptor);

        $paymentProcessor->process($amount);
    }

}