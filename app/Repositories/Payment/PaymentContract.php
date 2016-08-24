<?php

namespace App\Repositories\Payment;

interface PaymentContract
{
    public function create($request);
    public function findById($paymentid);
    public function findAll();
}
