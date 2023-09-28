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

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'series' => ['string'],
            'expiry' => ['string'],
        ]);

        Vaccine::create([
            'name' => $validated['name'],
            'series' => $validated['series'],
            'expiry' => $validated['expiry'],
            'date' => $request->date,
        ]);

        return back();
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

    public function delete(Request $request)
    {
        Vaccine::find($request->id)->delete();

        session(['alert' => 'Ви успішно видалили поле']);
        return back();
    }

    public function export(Request $request)
    {
        dd($request->all());
    }
    public function import(Request $request)
    {
        dd($request->all());
        if($request->create)
        {
            
        } else
        {
            return back();
        }
    }
}
