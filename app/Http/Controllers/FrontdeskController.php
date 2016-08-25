<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontdeskController extends Controller
{
    public function welcome() {
        return view('frontdesk.welcome');
    }
}
