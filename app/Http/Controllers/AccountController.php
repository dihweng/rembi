<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
{
    public function dashboard() {
        return view('account.dashboard');
    }
    
    public function registerService() {
        return view('service.create');
    }
     public function registerInventory() {
        return view('inventory.create');
    }
}
