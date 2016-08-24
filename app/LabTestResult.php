<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTestResult extends Model
{
    public function patient() 
    {
        return $this->belongsTo('App\Patient');
    }
    
    public function labTest() {
        return $this->belongsTo('App\LabTest');
    }
}
