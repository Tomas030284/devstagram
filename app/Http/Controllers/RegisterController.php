<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name'=>'required|max:30',
            'lastname'=>'required|max:30',
            'email'=>'required|unique:users|email|max:60',
            'phone'=>'required',
            'password'=>'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'lastname'=> $request->lastname,
            'email' => $request->email,
            'phone'=> $request->phone,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('posts.index');

    }

}
