<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Meter;
use App\Models\Stationery;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function coffee($date)
    {
        $coffee = Coffee::query()->where('date', '=', $date)->get();
        return view('tables.coffee', compact('coffee'));
    }
    public function stationery($date)
    {
        $stationeries = Stationery::query()->where('date', '=', $date)->get();
        return view('tables.stationery', compact('stationeries'));
    }
    public function meter($date)
    {
        $meters = Meter::query()->where('date', '=', $date)->get();
        return view('tables.meter', compact('meters'));
    }
}
