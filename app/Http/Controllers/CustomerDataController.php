<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Response;

class CustomerDataController extends Controller
{
    
    protected $customer;
    
    public function __construct(CustomerRepository $customer)
    {
        $this->middleware('auth');
        $this->middleware('customer');   
        $this->customer = $customer;       
    }   
    
    public function index(Request $request)
    {
        return view('customerData.index', [
            'customer' => $this->customer->getUserSettings($request->user()),    
            'name' => $request->user()->name         
        ]);
    }
    
    public function update(Request $request)
    {
         $this->validate($request, [
            'name' => 'required|max:255',
            'city' => 'max:30',
            'country' => 'max:30'
         ]);        
         
        $this->customer->updateDetails($request->user(), $request->name, $request->city, $request->country);
        return redirect('customer/settings');
    }
    
    
    
}
