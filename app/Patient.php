<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function family() {
        return $this->hasOne('App\Family');
    }
    
    public function corporate() {
        return $this->hasOne('App\Corporate');
    }
    
    public function payments() {
        return $this->hasMany('App\Payment');
    }
    
    public function labTests() {
        return $this->hasMany('App\LabTest');
    }
    
    public function labTestResults(){
        return $this->hasMany('App\LabTestResult');
    }
}
