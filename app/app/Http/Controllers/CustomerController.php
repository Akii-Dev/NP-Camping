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
        $validated = $request->validate([
            'title' => 'nullable|string|max:10',
            'initials' => 'required|string|max:10',
            'intersertion' => 'nullable|string|max:50',
            'surname' => 'required|string|max:100',
            'street' => 'nullable|string|max:100',
            'house_number' => 'required|numeric|max:9999', // max 10 would mean number 11 can't be used.
            'house_number_addition' => 'nullable|string|max:10',
            'postal_code' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'phone_number' => 'required|string|max:20',
        ]);

        $user = User::find($id);
        $customer = $user->customer;

        // return $customer;
        $customer->update($validated); // assigns all validated input into customer
                return redirect()->route('customer.show', $user->id)->with('success', 'Profiel succesvol bijgewerkt'); // use this instead of return route


    }
}
