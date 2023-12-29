<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index( User $user)
    {
        $users = User::all();
        return view('dashboard',[
            'users' => $users
        ]);
    }

}

