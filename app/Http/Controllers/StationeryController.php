<?php

namespace App\Http\Controllers;

use App\Exports\StationeriesExport;
use App\Exports\StationeryMultipleExport;
use App\Imports\StationeryMultipleImport;
use App\Models\Coffee;
use App\Models\Meter;
use App\Models\Stationery;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StationeryController extends Controller
{
    public function show($date, Request $request)
    {
        $stationeries = Stationery::query()->where('date', '=', $date)->get();
        $coffee = Coffee::query()->where('date', '=', $date)->get();
        $meters = Meter::query()->where('date', '=', $date)->get();
        return view('stationery.show', compact('stationeries', 'coffee', 'meters', 'date'));
    }
    public function export(Request $request)
    {
        dd($request->all());
        if($request->export)
        {
            return Excel::download(new StationeryMultipleExport($request->export), 'stationery.xlsx');
        } else if($request->date)
        {
            return Excel::download(new StationeryMultipleExport($request->date), 'stationery.xlsx');
        } else if($request->date_from && $request->date_to)
        {
            return Excel::download(new StationeryMultipleExport($request->date), 'stationery.xlsx');
        }
    }
    public function import(Request $request)
    {
        if($request->import)
        {
            Excel::import(new StationeryMultipleImport($request->import), $request->file('excel')->store('temp'));

            return back();
        } else if($request->create)
        {
            Excel::import(new StationeryMultipleImport($request->create), $request->file('excel')->store('temp'));

            return redirect()->route('stationery.show', [$request->create]);
        }
    }
}
