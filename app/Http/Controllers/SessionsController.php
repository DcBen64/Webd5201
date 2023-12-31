<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255|min:7',
        ]);
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/characters')->with('success', 'Welcome Back!');
        }
        return back()->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/characters')->with('success', 'Goodbye!');
    }
}
