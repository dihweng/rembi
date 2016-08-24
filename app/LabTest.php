<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    public function patient() 
    {
        return $this->belongsTo('App\Patient');
    }
}