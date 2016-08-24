<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QueueController extends Controller
{
    protected $repo;
    public function __construct(QueueContract $queueContract){
        $this->repo = $queueContract;
    }
}
