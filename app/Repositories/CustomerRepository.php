<?php

namespace App\Repositories;

use App\User;
use App\Customer;

class CustomerRepository
{
    public function updateDetails(User $user, $name, $city, $country)
    {
        $user->name = $name;
        $user->save();
        $customer = $user->customer;
        $customer->city = $city;
        $customer->country = $country;        
        $customer->save();       
    } 
    
    public function getUserSettings(User $user)
    {
        $customer = $user->customer; 
        return $customer;
    } 
    
}