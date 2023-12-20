<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    // Show Register|Create Form
    public function register()
    {
        return view('users.register');
    }

    // Create new user
    public function store(StoreUserRequest $request)
    {
        $formFields = $request->validated();

        $user = User::create([
            'name' => $formFields['name'],
            'email' => $formFields['email'],
            'password' => Hash::make($formFields['password']),
        ]);

        // Authenticate user and log in
        auth()->login($user);

        return redirect()->route('home')->with('message', 'User created and logged in.');
    }

    // logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('message', 'You have been logout.');
    }

    // Show Login Form
    public function login()
    {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(LoginUserRequest $request)
    {
        $formFields = $request->validated();

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('message', 'You are logged in!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
}
