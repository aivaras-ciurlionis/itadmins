<?php

namespace App\Repositories;

use App\User;
use App\Role;
use App\Customer;

class RoleRepository
{
    public function addToRole(User $user, $roleName)
    {
        $role = Role::where('name', $roleName)->first();
        
        $user->role_id = $role->id;
        
        $user->save();
        
        if ($roleName === "Customer"){
            $this->createCustomer($user);
        }
        
    }
    
    public function createCustomer(User $user) 
    {
        $customer = Customer::create([
            'city' => '',
            'country' => ''                   
        ]);       
        
        $customer->user_id = $user->id;
        $customer->save();      
    }
    
    
}