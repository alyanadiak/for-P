<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\petugas;
use Hash;
use Illuminate\Http\Request;
use Session;

class SesiController extends Controller
{
    //
    // Show the login form
    public function showLoginForm()
    {
        return view('sesi/index');
    }

    // Process the login form submission
    public function processLogin(Request $request)
    {
        $password = $request->input('password');

        if ($password === '202') {
            // Store session data to mark user as logged in
            $request->session()->put('logged_in', true);
            return redirect('menu')->with('success', 'Hello Panji! Login Success');
        }

        // Redirect back with an error message if the password is incorrect
        return redirect()->route('login')->with('error', 'Invalid password.');
    }
    public function menu(Request $request)
    {
        // Check if the user is logged in
        if (!$request->session()->get('logged_in')) {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }

        return view('main.menu');
    }
}
