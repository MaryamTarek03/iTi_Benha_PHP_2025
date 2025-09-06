<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        // dd($user);
        // dd(Hash::make($request->password), $user->password, Hash::check($request->password, $user->password));
        if (!$user) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }

        if ($user && Hash::check($request->password, $user->password)) {
            session()->regenerate();
            session(['user' => $user]);
            session(['notes' => []]);
            // dd(session('user'));
            return to_route('notes')->with('success', 'Login successful.');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        session()->invalidate();
        return redirect('/');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $formData['password'] = Hash::make($formData['password']);

        User::create($formData);

        $this->authenticate($request);

        return redirect()->route('notes')->with('success', 'Registration and login successful.');
    }
}
