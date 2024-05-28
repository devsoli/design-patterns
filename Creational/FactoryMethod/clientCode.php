<?php

use Creational\FactoryMethod\CreditCardFactory;
use Creational\FactoryMethod\PayPalFactory;

function run()
{
    $creditCardFactory = new CreditCardFactory('123456','2343','03/02');
    $creditCard = $creditCardFactory->createPaymentMethod();
    $creditCard->processPayment(233000);

    echo '<br>';

    $payPalFactory = new PayPalFactory('test#test.com','test123');
    $payPal = $payPalFactory->createPaymentMethod();
    $payPal->processPayment(10000);
}