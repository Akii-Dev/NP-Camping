<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Spot;
use App\Models\Customer;
use App\Models\User;

class BookingController extends Controller
{
    public function index()
    {
        // get all spots from the database
        $spots = Spot::all();
        return view('booking.index', compact('spots')); // short for ['spot' => $spot]
    }

    public function create()
    {
        // get user id from the session. user is saved as a whole and id is part of it
        $userId = session('user.id');
        $user = User::find($userId);
        $customer = $user->customer;
        // return view('booking.create');
        return view('booking.create', compact('customer'));
    }

    public function store(Request $request)
    {
        // validate both the customer info and the new booking info
        $validatedBooking = $request->validate([
            'spot' => 'required|numeric|exists:spots,id', // spot id must exist in spots table
            'persons' => 'required|numeric|min:1|max:10',
            'dog' => 'nullable|boolean', // either true or false. null and false should be the same
            'extra_tent' => 'nullable|numeric|min:0|max:5',
            'camping_means' => 'required|string|max:100',
            'date_start' => 'required|date',
            'date_end' => 'required|date|after:date_start', // end date must be after start date
        ]);
        $validatedCustomer = $request->validate([

            // customer fields. these can be pre filled 
            'title' => 'nullable|string|max:10', // not everyone wants a title
            'initials' => 'required|string|max:10',
            'intersertion' => 'nullable|string|max:50', // "tussenvoegsel"
            'surname' => 'required|string|max:100',
            'street' => 'required|string|max:100', // 
            'house_number' => 'required|numeric|max:9999', // max 10 would mean number 11 can't be used.
            'house_number_addition' => 'nullable|string|max:10',
            'postal_code' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'phone_number' => 'required|string|max:20',
        ]);


        // update customer info if it changed
        $userId = session('user.id'); // user id. not customer id
        $user = User::find($userId);
        $customer = $user->customer;
        $customer->update($validatedCustomer); // 

        // create new booking
        $booking = Booking::factory()->create([
            'customer_id' => $customer->id, // so this is customer id. not user id
            'number_of_people' => $validatedBooking['persons'],
            'accommodation' => $validatedBooking['camping_means'], 
            'has_dog' => $validatedBooking['dog'] ?? false, 
            'extra_tents' => $validatedBooking['extra_tent'] ?? 0,
            'start_date' => $validatedBooking['date_start'],
            'end_date' => $validatedBooking['date_end'],
        ]);

        // return redirect()->route('customer.show', $userId)->with('success', `Booking created successfully! See you on {$validatedBooking['date_start']}.`);
        return redirect()->route('customer.show', $user->id)->with('success', 'Boeking aangemaakt! Tot ' . $validatedBooking['date_start']); // backticks do not work


    }
}
