<?php

namespace App\Repositories\LabTestResult;

use App\Repositories\Family\LabTestResultContract;

use App\LabTestResult;

class EloquentLabTestResultRepository implements LabTestResultContract
{
    public function create($request) {
        $result = new LabTestResult();
        $result->save();
        return $result;
    }
    
    public function findById($resultid) {
        return LabTestResult::find($resultid);
    }
    
    public function findAll($resultid){
        return LabTestResult::all();
    }
    
    private function setLabTestResultProperties($labTestResult, $request) {
        
    }
}
