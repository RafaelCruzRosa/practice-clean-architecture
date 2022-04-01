<?php

interface IPayment {
    public function pay(): string;
}

class Payment
{
    public function pay(IPayment $paymentType)
    {
        return $paymentType->pay();
    }
}

class Bill implements IPayment
{
    public function pay(): string
    {
        return "Paying bill";
    }
}

class Card implements IPayment
{
    public function pay(): string
    {
        return "Paying card";
    }
}

class CreditCard implements IPayment
{
    public function pay(): string
    {
        return "Paying credit card";
    }
}

$payment = new Payment();

echo $payment->pay(new Bill());
echo $payment->pay(new CreditCard());
echo $payment->pay(new Card());
