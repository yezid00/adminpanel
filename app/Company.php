<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public fuction employees(){
    	return $this->hasMany('App\Employee');
    }
}
