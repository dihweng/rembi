<?php

namespace App\Repositories\Corporate;

use App\Repositories\Corporate\CorporateContract;

class EloquentCorporateRepository implements CorporateContract
{
    public function create($request) {
        $corporate = new Corporate();
        $this->setCorporateProperties($corporate, $request);
        $corporate->save();
        return $corporate;
    }
    
    public function edit($corporateid, $request) {
        $corporate = $this->findById($corporateid);
        $this->setCorporateProperties($corporate, $request);
        $corporate->save();
        return $corporate;
    }
    
    public function remove($corporateid) {
        $corporate = $this->findById($corporateid);
        return $corporate->delete();
    }
    
    public function findById($corporateid) {
        return Corporate::find($corporateid);
    }
      public function findAll()
    {
         return Corporate::all();
    }
    
    private function setCorporateProperties($corporate, $request) {
        $corporate->name = $request->name;
        $corporate->address = $request->address;
        $corporate->hmo_plan = $request->hmo_plan;
        $corporate->hmo_rate = $request->hmo_rate;
        $corporate->hmo_expiry = $request->hmo_expiry;
    }

}
