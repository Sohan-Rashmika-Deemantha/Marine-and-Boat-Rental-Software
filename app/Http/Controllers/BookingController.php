<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Show the booking page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('booking');  // Return the booking view (you can create a booking.blade.php)
    }
}
