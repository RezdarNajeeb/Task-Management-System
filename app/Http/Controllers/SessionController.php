<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validatedUserInformation = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($validatedUserInformation)) {
            throw ValidationException::withMessages([
                'email' => 'Those credentials incorrect, try again.'
            ]);
        }

        $request->session()->regenerate();

        return to_route('tasks.index');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
