<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    public function store()
    {
        // need to add |email after testing
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if (request(['password']) != request(['confirmPassword'])) {
            // @todo need to work on
            // session(['flash_message' => 'Passwords do not match.']);
            // session(['flash_type' => 'alert-danger']);

            // return redirect()->to('/');
            // Redirect::back()->with('message', 'error|There was an error...');
        }

        // query to check if email already exists

        User::create(request(['name', 'email', 'password']));


        // auth()->login($user);
        
        // @todo grab which page user was on

        return redirect()->to('/');
        
        // return Redirect::route('/');
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
