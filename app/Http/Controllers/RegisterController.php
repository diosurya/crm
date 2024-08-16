<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $data['title'] = "Register Page";
        return view('auth/register', $data);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        // $request->session()->flash('success', 'Registration successful!');
        return redirect('/login')->with('success', 'Registration successful!');
    }
}
