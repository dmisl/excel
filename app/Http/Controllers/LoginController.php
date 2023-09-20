<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required']
        ]);
        if(Auth::attempt($validated, true))
        {
            return redirect()->route('home.index');
        } else
        {
            session(['alert' => 'Данні не зходяться']);
            return back()->withInput();
        }
    }
}
