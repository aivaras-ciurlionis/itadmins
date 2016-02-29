<?php

namespace App\Repositories;

use App\User;
use App\Role;

class RoleRepository
{
    public function addToRole(User $user, $roleName)
    {
        $role = Role::where('name', $roleName)->first();
        
        $user->role_id = $role->id;
        
        $user->save();
        
    }
}