<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedUserInformation = $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(6)]
        ]);

        // Password hashed by default in casts method of User model

        // Create new user in DB
        $user = User::create($validatedUserInformation);

        // Login the new user
        Auth::login($user);

        // Redirect to index page
        return to_route('tasks.index');
    }
}
