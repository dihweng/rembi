<?php

namespace App\Repositories\LabTest;

use App\Repositories\Family\LabTestContract;

use App\LabTest;

class EloquentLabTestRepository implements LabTestContract
{
    public function create($request) {
        $labtest = new LabTest();
        $labtest->save();
        return $labtest;
    }
    
    public function findById($labtestid) {
        return LabTest::find($labtestid);
    }
    
    public function findAll($labtestid) {
        return LabTest::all();
    }
    
    private function setLabTestProperties($labTest, $request) {
        
    }
}
