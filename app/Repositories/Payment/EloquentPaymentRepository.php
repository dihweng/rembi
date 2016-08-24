<?php

namespace App\Repositories\Payment;

use App\Repositories\Payment\PaymentContract;
use App\Payment;

class EloquentPaymentRepository implements PaymentContract
{
    public function create($request) {
        $payment = new Payment();
        $payment->save();
        return $payment;
    }
    
    public function findById($paymentid){
        return Payment::find($paymentid);
    }
    
    public function findAll(){
        return Payment::all();
    }
    
    private function setPaymentProperties($payment, $request) {
        $payment->type = $request->type;
        $payment->amount = $request->amount;
    }
}
