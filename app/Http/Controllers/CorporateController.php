<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Corporate\CorporateContract;

class CorporateController extends Controller
{
    protected $repo;
    public function __construct(CorporateContract $corporateContract){
        $this->repo = $corporateContract;
    }
    
    public function index(){
        $corporates = $this->repo->findAll();
        return view('corporate.index', ['corporate', $corporates]);
        
    }
    
    public function show(){
        return view('corporate.create');
        
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'address' => 'required',
            'hmo_plan' => 'required',
            'hmo_rate' => 'required',
            'hmo_expiry' => 'required',
        ]);
        
        $family = $this->repo->create($request);
        if ($family->id) {
            return back()
                ->with('success', 'Corporate successfully registered.');
        } else {
            return back()
                ->withInput()
                ->with('error', 'There was a problem registering the Corporate. Try again');
        }
        
    }
    
    public function remove(){
        
    }
    
    public function showEdit($id){
        $corporate = $this->repo->findById($id);
        return view('corporate.edit', ['corporate', $corporate]);
    }
    
    public function edit(Request $request, $id){
        
    }
}
