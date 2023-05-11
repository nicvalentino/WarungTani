<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect()->intended('/home');
        } else {
            return view('Login');
        }
        
    }

    public function authenticate(Request $request)
    {    
        $credentials = $request->validate([
            'email' => ['required' , 'email:dns'],
            'password' => ['required' , 'min:6' , 'max:255'],
        ]);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        session()->flash('loginError', 'Login Failed');
        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
