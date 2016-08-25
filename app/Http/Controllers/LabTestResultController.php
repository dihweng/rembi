<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\LabTestResult\LabTestResultContract;

class LabTestResultController extends Controller
{
    protected $repo;
    
    public function __construct(LabTestResultContract $labTestResultContract) {
        $this->repo = $labTestResultContract;
    }
    
    public function index() {
        $labTestResults = $this->repo->findAll();
        return view('labtestresult.index', ['labTestResults', $labTestResults]);
    }
    
    public function show() {
        return view('labtestresult.create');
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'result' => 'required',
        ]);
        
        $labTestResult = $this->repo->create($request);
        if ($labTestResult->id) {
            return back()
                ->with('success', 'Test Result created successfully.');
        }else {
            return back()
                ->withInput()
                ->with('error', 'There was a problem saving the Test Result.');
        }
    }
}
