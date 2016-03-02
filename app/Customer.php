<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Faults;

class Customer extends Model
{
    
     protected $fillable = ['city', 'country'];
    
    public function user(){
        return $this->belongsTo(User::class);        
    }
    
    public function faults(){
        return $this->hasMany(Fault::class);
    }
    
}
