<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
use App\Employee;

class Fault extends Model
{
    public function employee()
    {
        return $this->belongsTo(Employee::class);        
    }
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);        
    }
        
}
