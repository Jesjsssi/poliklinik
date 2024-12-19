<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dokter;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        // Check if the user is an admin
        $user = User::where('name', $request->name)->first();  // Check in 'users' table for 'admin'
        if ($user && $user->role == 'admin' && Hash::check($request->password, $user->password)) {
            Auth::login($user); // Log in the admin
            return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
        }

        // Check if the user is a dokter
        $dokter = Dokter::where('nama', $request->name)->first();  // Check in 'dokters' table for 'dokter'
        if ($dokter && Hash::check($request->password, $dokter->password)) {
            Auth::login($dokter); // Log in the dokter
            return redirect()->route('dokter.dashboard'); // Redirect to dokter dashboard
        }

        // If authentication fails, return with error message
        return back()->withErrors(['message' => 'Invalid credentials.']);
    }


}