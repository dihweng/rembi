<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\Payment\PaymentContract;

class PaymentController extends Controller
{
    protected $repo;
    public function __construct(PaymentContract $paymentContract) {
        $this->repo = $paymentContract;
    }
    
    public function index(){
        $payments = $this->repo->findAll();
        return view('payment.index',['payments',$payments]);
    }
    
    public function show() {
        return view('payment.create');
    }
    
    public function store(Request $request) {
        $this->validate($request,[
            'type' => 'required',
            'amount' => 'required'
        ]);
        
        $payment = $this->repo->create($request);
        if ($payment->id) {
            return back()
                ->with('success', 'Transaction successfully saved.');
        } else {
            return back()
                ->withInput()
                ->with('error', 'There was a problem saving the Transaction. Try again');
        }
    }
}
