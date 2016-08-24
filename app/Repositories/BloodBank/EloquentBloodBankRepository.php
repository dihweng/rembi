<?php

namespace App\Repositories\BloodBank;

use App\Repositories\BloodBank\BloodBankContract;
use App\BloodBank;

class EloquentBloodBankRepository implements BloodBankContract
{
    public function create($request) {
        $bloodbank = new BloodBank();
        $bloodbank->save();
        return $bloodbank;
    }
    
    public function edit($bloodbankid,$request){
        $bloodbank = $this->findById($bloodbankid);
        $bloodbank->save();
        return $bloodbank;
    }
    
    public function remove($bloodbankid) {
        $bloodbank = $this->findById($bloodbankid);
        return $bloodbank->delete();
    }
    
    public function findById($bloodbankid){
        return BloodBank::find($bloodbankid);
    }
    
    public function findAll(){
        return BloodBank::all();
    }
}
