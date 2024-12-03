<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Show the payment page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('payment');  // Return the payment view (you'll create this file in Step 4)
    }
}
