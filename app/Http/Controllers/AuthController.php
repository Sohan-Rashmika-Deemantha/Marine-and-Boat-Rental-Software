<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('login');  // Return the login view
    }

    /**
     * Handle the login process.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processLogin(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login with the provided credentials
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect to the boats page upon successful login
            return redirect()->route('boats');
        } else {
            // If authentication fails, redirect back with an error
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
    }

    /**
     * Show the signup form (Customer or Employee).
     *
     * @param string $type
     * @return \Illuminate\View\View
     */
    public function showSignupForm($type = 'customer')
    {
        // Validate the type (customer or employee)
        if (!in_array($type, ['customer', 'employee'])) {
            $type = 'customer'; // Default to 'customer' if invalid
        }

        return view('employee/signup', compact('type')); // Pass the 'type' to the signup view
    }

    // Optional: Process Signup (if needed)
    public function handleSignup(Request $request, $type)
    {
        // Handle signup logic here
        // You can use $type to decide whether to create a 'customer' or 'employee'
    }
}
