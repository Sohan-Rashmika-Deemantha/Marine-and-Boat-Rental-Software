<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoatsController extends Controller
{
    /**
     * Show the boats page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('boats');  // Return the boats view (you'll create this in Step 4)
    }
}
