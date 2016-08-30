<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Family\FamilyContract;

class FamilyController extends Controller
{
    protected $repo;
    public  function __construct(FamilyContract $familyContract) {
        $this->repo = $familyContract;
    }
    
    public function showindex() {
        $families = $this->repo->findAll();
        return view('family.index', ['families', $families]);
    }
    
    public function show() {
        return view('family.create');
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'hmo_plan' => 'required',
            'hmo_rate' => 'required',
            'hmo_expiry' => 'required',
        ]);
        
        $family = $this->repo->create($request);
        if ($family->id) {
            return back()
                ->with('success', 'Family successfully registered.');
        } else {
            return back()
                ->withInput()
                ->with('error', 'There was a problem registering the Family. Try again');
        }
    }
    
    public function showEdit($id) {
        $family = $this->repo->findById($id);
        return view('family.edit', ['family', $family]);
    }
    
    public function remove() {
        
    }
    
    public function edit(Request $request, $id){
        
    }
}
