<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }

    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    public function store(){
        // validate the request

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // attempt to authenticate and log in the user
        if (! auth()->attempt($attributes)){
            // redirect eith a success flash message
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);
             // another way to show auth failure
            // return back()
            // ->withInput()
            // ->withErrors(['email' => 'Your provided credentials could not be verified']);
        }
        // auth failed
        return redirect('/')->with('success', 'Welcome Back!');
    }
}
