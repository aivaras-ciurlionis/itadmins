<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Customer;
use App\Employee;
use App\SysAdmin;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function role(){
        return $this->belongsTo(Role::class);
    }
    
    public function customer(){
        return $this->hasOne(Customer::class);
    }
    
    public function employee(){
        return $this->hasOne(Employee::class);
    }
    
    public function sysAdmin(){
        return $this->hasOne(SysAdmin::class);
    }
    
}
