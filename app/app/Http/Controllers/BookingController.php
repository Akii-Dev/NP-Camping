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
        // get user data
        return view('booking.create');
    }
}
