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

        $isRemember = $request->boolean('remember');

        if (!Auth::attempt($validatedUserInformation, $isRemember)) {
            throw ValidationException::withMessages([
                'email' => 'Those credentials are incorrect, try again.'
            ]);
        }

        $request->session()->regenerate();

        return to_route('tasks.index');
    }

    public function destroy(Request $request)
    {
        // Invalidate the user session and remove the remember me cookie
        Auth::logout();

        // Regenerate the session to avoid session fixation
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
