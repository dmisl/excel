<?php

namespace App\Http\Controllers;

use App\Exports\TestsExport;
use App\Imports\TestImport;
use App\Imports\TestMultipleImport;
use App\Models\Test;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index');
    }
    public function export()
    {
        return Excel::download(new TestsExport, 'test.xlsx');
    }
    public function import(Request $request)
    {
        // Excel::import(new TestMultipleImport, $request->file('excel')->store('temp'));

        return back();
    }
}
