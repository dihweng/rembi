<?php

namespace App\Repositories\Family;

use App\Repositories\Family\FamilyContract;

use App\Family;

class EloquentFamilyRepository implements FamilyContract
{
    public function create($request) {
        $family = new Family();
        $this->setFamilyProperties($family, $request);
        $family->save();
        return $family;
    }
    
    public function edit($familyid, $request) {
        $family = Family::findById($familyid);
        $this->setFamilyProperties($family, $request);
        $family->save();
        return $family;
    }
    
    public function findById($familyid) {
        return Family::find($familyid);
    }
    
    public function findAll(){
        return Family::all();
    }

    public function remove($familyid) {
        $family = $this->finfById($familyid);
        return $family->delete();
    }
    
    private function setFamilyProperties($family, $request) {
        $family->name = $request->name;
        $family->address = $request->address;
        $family->hmo_plan = $request->hmo_plan;
        $family->hmo_rate = $request->hmo_rate;
        $family->hmo_expiry = $request->hmo_expiry;
    }
}
