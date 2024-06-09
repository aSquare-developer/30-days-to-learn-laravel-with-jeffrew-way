<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store() {
        
        // Validation
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254', 'unique:users,email'],
            'password' => ['required', 'confirmed']
        ]);

        // Create User
        $user = User::create($attributes);

        // Log in
        Auth::login($user);

        // Redirect
        return redirect('/jobs');
    }
}
