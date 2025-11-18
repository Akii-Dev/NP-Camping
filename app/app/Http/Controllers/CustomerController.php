<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function show(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect('/')->with('error', 'Gebruiker niet gevonden');
        }
        $customer = $user->customer;
        return view('customer.show', compact('customer'));
    }
    // resource methods would go here. we'll work with edit user account. showing the view page and logic
    public function edit(Request $request, $id)
    {

        if (!session()->has('user')) {
            return redirect('/login')->with('error', 'Je moet ingelogd zijn om je profiel te bewerken');
        }

        if (session('user.id') != $id) {
            return redirect('/login')->with('error', 'Je kunt alleen je eigen profiel bewerken');
        }

        // $customer = Customer::find($id);
        $user = User::find($id);

        $customer = $user->customer;

        // var_dump(session('user.id'));
        // var_dump(session('user.email'));
        // var_dump($customer->user_id);
        // var_dump($customer->user->email); // this works because of the relationship defined in the Customer model
        return view('customer.edit', compact('customer')); // compact is the same as ['customer' => $customer]
    }

    public function update(Request $request, $id)
    {
        echo "update";
    }
}
