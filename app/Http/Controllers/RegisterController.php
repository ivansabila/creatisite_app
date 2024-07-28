<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|min:3|max:255',
            'email' => 'required|unique:users',
            'phone_number' => 'required|numeric',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        $request->session()->flash('success', 'Registration successfully');

        return redirect('/login');
    }
}
