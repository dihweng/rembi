<?php

namespace App\Repositories\Donor;

use App\Repositories\Donor\DonorContract;
use App\Donor;

class EloquentDonorRepository implements DonorContract
{
    public function create($request) {
        $donor = new Donor();
        $donor->save();
        return $donor;
    }
    
    public function edit($donorid,$request){
        $donor = $this->findById($donorid);
        $donor->save();
        return $donor;
    }
    
    public function remove($donorid) {
        $donor = $this->findById($donorid);
        return $donor->delete();
    }
    
    public function findById($donorid){
        return Donor::find($donorid);
    }
    
    public function findAll(){
        return Donor::all();
    }
}