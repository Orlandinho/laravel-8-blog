<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(! auth()->attempt($attributes)){

            throw ValidationException::withMessages([
                'email' => 'Your credentials aren\'t correct'
            ]);

            //return back()->withInput()->withErrors(['email' => 'Your credentials aren\'t correct']); this is one other way
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back!');
    }
}
