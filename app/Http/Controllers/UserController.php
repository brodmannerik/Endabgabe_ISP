<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create(): Factory|View|Application
    {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request): Redirector|Application|RedirectResponse
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $formFields['paid_member'] = false;

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/payment');

        //return redirect('/')->with('success', 'User created and logged in');
    }

    // Logout User
    public function logout(Request $request): Redirector|Application|RedirectResponse
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out');

    }

    //Show Login Form
    public function login(): Factory|View|Application
    {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request): Redirector|Application|RedirectResponse
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'You are now logged in');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
}
