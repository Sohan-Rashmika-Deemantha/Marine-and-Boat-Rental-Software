<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoatController extends Controller
{
    public function home() {
        return view('home');
    }

    public function customerSignup() {
        return view('customer.signup');
    }

    public function employeeSignup() {
        return view('employee.signup');
    }

    public function login() {
        return view('login');
    }

    public function boats() {
        return view('boats');
    }

    public function booking() {
        return view('booking');
    }

    public function payment() {
        return view('payment');
    }
}
