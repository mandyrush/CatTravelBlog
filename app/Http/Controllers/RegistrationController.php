<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    
    public function store()
    {
        
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $data = request(['name', 'email', 'password']);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);


        auth()->login($user);

        return redirect()->home();
    }
}