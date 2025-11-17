<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // resource methods would go here. we'll work with edit user account. showing the view page and logic
    public function edit(Request $request, $id) 
    {

        $customer = Customer::find($id);

        var_dump(session('user.id')); 
        var_dump(session('user.email')); 
        var_dump($customer->user_id); 
        var_dump($customer->user->email); // this works because of the relationship defined in the Customer model
        // return view('customers.edit', compact('customer')); // compact is the same as ['customer' => $customer]
    }

}
