<?php

namespace App\Http\Controllers;

use App\Models\Stationery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $stationeries = Stationery::all();
        return view('home.index', compact('stationeries'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
