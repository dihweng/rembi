<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontdeskController extends Controller
{
    public function dashboard() {
        return view('frontdesk.dashboard');
    }

    public function registerPatient() {
        return view('patient.register');
    }

    public function registerFamily() {
        return view('family.register');
    }

    public function registerCorporate() {
        return view('corporate.register');
    }
    
    public function welcomePatient() {
        return view('patient.welcome');
    }
     
}
