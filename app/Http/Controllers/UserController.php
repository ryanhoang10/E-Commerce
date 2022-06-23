<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function register(Request $request)
    {
    
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
