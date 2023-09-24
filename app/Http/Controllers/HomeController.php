<?php

namespace App\Http\Controllers;

use App\Models\Stationery;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $stationeries = Stationery::all();
        $vaccines = Vaccine::all();
        return view('home.index', compact('stationeries', 'vaccines'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
