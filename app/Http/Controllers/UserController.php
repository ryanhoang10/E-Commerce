<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create(request(['username', 'email', 'password']));

        
        // dd(request(), " <-- hit");

        // auth()->login($user);
        
        // @todo grab which page user was on

        return redirect()->to('/');
        
    }

    public function login(Request $request)
    {
        
    }

    public function index()
    {
        return Inertia::render('User', [

        ]);
    }
}
