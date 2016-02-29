<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Fault;

class Employee extends Model
{
    public function user(){
        return $this->belongsTo(User::class);        
    }
    
    public function faults(){
        return $this->hasMany(Fault::class);
    }
    
    
}
