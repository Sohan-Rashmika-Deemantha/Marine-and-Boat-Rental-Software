<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Show the Employee Signup Form.
     *
     * @return \Illuminate\View\View
     */
    public function showSignupForm()
    {
        return view('employee.signup'); // Return the Employee Signup Blade View
    }
}
