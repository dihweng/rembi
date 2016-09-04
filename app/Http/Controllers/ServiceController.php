<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\Service\ServiceContract;

class ServiceController extends Controller
{
    protected $repo;
    
    public function __construct(ServiceContract $serviceContract)
    {
        $this->repo = $serviceContract;
    }
    
    public function index()
    {
        $services = $this->repo->findAll();
        return view('service.index', ['services', $services]);
    }
    
    public function show() {
        return view('service.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'name' => 'required',
            'price' => 'required',
            ]);
            
     $service = $this->repo->create($request);
        if($service->id) {
            return back()
                ->with('success', 'Service successfully created.');
        } else{
            return back()
                ->withInput()
                ->with('error', 'There was a problem creating the Service. Try again');
        }
    }
    
    public function showEdit($id)
    {
        $service = $this->repo->findById($id);
        return view('service.edit', ['service', $service]);
    }
    
     public function remove() 
    {
        
    }
    
    public function edit(Request $request, $id){
        
    }
}
