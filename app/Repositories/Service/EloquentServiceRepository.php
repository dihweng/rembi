<?php

namespace App\Repositories\Service;

use App\Service;
use App\Repositories\Service\ServiceContract;

class EloquentServiceRepository implements ServiceContract
{
    
    public function create($request) {
        $service = new Service();
        $this->setServiceProperties($service, $request);
        $service->save();
        return $service;
    }
    
    public function edit($serviceid, $request) {
        $service = $this->findById($serviceid);
        $this->setServiceProperties($service, $request);
        $service->save();
        return $service;
    }
    
    public function remove($serviceid) {
        $service = $this->findById($serviceid);
        return $service->delete();
    }
    
    public function findById($serviceid) {
        return Service::find($serviceid);
    }
      public function findAll()
    {
         return Service::all();
    }
    
    private function setServiceProperties($service, $request) {
        $service->type = $request->type;
        $service->name = $request->name;
        $service->price = $request->price;
    }

}
