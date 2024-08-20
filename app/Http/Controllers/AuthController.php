<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function handleRegister(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        return redirect()->route('welcome', [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);
    }

    public function showWelcome(Request $request)
    {
        return view('welcome', [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);
    }
}
