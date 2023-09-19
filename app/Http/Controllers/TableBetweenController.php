<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Meter;
use App\Models\Stationery;
use Illuminate\Http\Request;

class TableBetweenController extends Controller
{
    public function coffee($date_from, $date_to)
    {
        $coffee = Coffee::query()->whereBetween('date', [$date_from, $date_to])->get();
        return view('table_between.coffee', compact('coffee'));
    }
    public function stationery($date_from, $date_to)
    {
        $stationeries = Stationery::query()->whereBetween('date', [$date_from, $date_to])->get();
        return view('table_between.stationery', compact('stationeries'));
    }
    public function meter($date_from, $date_to)
    {
        $meters = Meter::query()->whereBetweeb('date', [$date_from, $date_to])->get();
        return view('table_between.meter', compact('meters'));
    }
}
