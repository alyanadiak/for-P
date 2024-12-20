<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\petugas;
use Hash;
use Illuminate\Http\Request;
use Session;

class SessionController extends Controller
{
    function index()
    {
        return view("session/index");
    }

    function login(Request $request)
    {
        Session::flash('name', $request->name);

        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'enter your username',
            'password.required' => 'enter your password'
        ]);

        $infologin = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            // successful authentication
            $user = Auth::user();
            if (auth()->user()->role == 'Admin') {
                return redirect('admin')->with('success', 'Hello Admin ' . $user->name . '! Login Success');
            } elseif (auth()->user()->role == 'Petugas') {
                return redirect('kasir')->with('success', 'Hello ' . $user->name . '! Login Success as Petugas');
            }
        } else {
            // Authentication failed
            return redirect()->route('sesi')->withErrors('Invalid Username and Password');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('session')->with('success', 'logout success');
    }

    // register form
    function register()
    {
        return view('session/register');
    }

    function create(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('name', $request->name);

        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|unique:users',
            'password' => 'required|min:8'
        ], [
            'email.required' => 'enter your email',
            'email.email' => 'please enter your email correctly',
            'email.unique' => 'email already exists',
            'name.required' => 'enter your username',
            'name.unique' => 'username already exist',
            'password.required' => 'enter your password',
            'password.min' => 'enter your password minimum 8 character'
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        $infologin = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'Admin') {
                return redirect('dashboard.index');
            } elseif (Auth::user()->role == 'Petugas') {
                return redirect('kasir.index');
            }
        } else {
            //jika gagal
            return redirect('session')->withErrors('Invalid Username and Password');
        }
    }
}
