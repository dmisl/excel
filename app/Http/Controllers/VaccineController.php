<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function show($date)
    {
        $vaccines = Vaccine::query()->where(['date' => $date])->orderBy('name', 'asc')->get();
        return view('vaccine.show', compact('vaccines', 'date'));
    }
    public function update(Request $request)
    {
        if($request->update)
        {
            foreach ($request->update as $id => $updates) {
                foreach ($updates as $column => $value) {
                    Vaccine::query()->where(['id' => $id])->update([$column => $value]);
                }
            }
            return back();
        } else
        {
            return back();
        }
    }
    public function export(Request $request)
    {
        dd($request->all());
    }
    public function import(Request $request)
    {
        if($request->create)
        {
            // $vaccine = Vaccine::create([
            //     ''
            // ]);
        } else
        {
            return back();
        }
    }
}
