<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporate extends Model
{
     public function patients()
    {
        return $this->hasMany('App\Patient');
    }
}
