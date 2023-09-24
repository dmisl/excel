<?php

namespace App\Http\Controllers;

use App\Imports\OrderB1Import;
use App\Models\OrderB1;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrderB1Controller extends Controller
{
    public function show($date)
    {
        $order = OrderB1::query()->where(['date' => $date])->get();
        return view('orderb1.show', compact('order'));
    }
    public function export(Request $request)
    {
        dd($request->all());
    }
    public function import(Request $request)
    {
        if($request->import)
        {
            Excel::import(new OrderB1Import($request->import), $request->file('excel')->store('temp'));

            return back();
        } else if($request->create)
        {
            Excel::import(new OrderB1Import($request->create), $request->file('cexcel')->store('temp'));

            return redirect()->route('orderb1.show', [$request->create]);
        }
    }
}
