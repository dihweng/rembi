<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\LabTest\LabTestContract;

class LabTestController extends Controller
{
    protected $repo;
    public function __construct(LabTestContract $labTestContract) {
        $this->repo = $labTestContract;
    }
    
    public function index() {
        $labTests = $this->repo->findAll();
        return view('labtest.index', ['labTests', $labTests]);
    }
    
    public function show() {
        return view('labtest.create');
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'dept' => 'required',
        ]);
        
        $labTest = $this->repo->create($request);
        if ($labTest->id) {
            return back()
                ->with('success', 'Test created successfully.');
        }else {
            return back()
                ->withInput()
                ->with('error', 'There was a problem creating the Test. Try again');
        }
    }
}
