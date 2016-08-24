<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\InventoryItem\InventoryItemContract;

class InventoryItemController extends Controller
{
    protected $repo;
    public function __construct (InventoryItemContract $inventoryItemContract)
    {
        $this->repo = $inventoryItemContract;
    }
    
    public function index() {
        $inventories = $this->repo->findAll();
        return view('inventoryitem.index', ['inventories', $inventories]);
    }
    
    public function show() {
        return view('inventoryitem.create');
    }
    
    public function store(Request $requests)
    { 
        $this->validate($requests, [
            'name' => 'required',
            'unit_price' => 'required',
            'department' => 'required',
            'stock' => 'required',
            'critical_level' => 'required',
            'manufacturer' => 'required',
            'manufacture_date' => 'required',
            'expiry_date' => 'required'
        ]);
        
        $inventoryItem = $this->inventoryitem->create($request);
        if($inventoryItem->id) {
            return back()
                ->with('success', 'Inventory Item successfully created.');
        } else{
            return back()
                ->withInput()
                ->with('error', 'There was a problem creating the Inventory Item. Try again');
        }
    }
    
    public function showEdit($id) {
        $inventoryItem = $this->repo->findById($id);
        return view('inventoryitem.edit', ['inventoryItem', $inventoryItem]);
    }
    
    public function remove() {
        
    }
    
    public function edit(Request $request, $id){
        
    }
}
