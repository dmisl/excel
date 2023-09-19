<?php

namespace App\Imports;

use App\Models\Stationery;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StationeryImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function model(array $row)
    {
        return new Stationery([
            'product_name' => $row['nazva_produktu'],
            'admin_a1' => $row['naiavnist_b1aa'],
            'admin_o1' => $row['zamovlennia_b1ao'],
            'nurse_a1' => $row['naiavnist_b1na'],
            'nurse_o1' => $row['zamovlennia_b1no'],
            'admin_a2' => $row['naiavnist_b4aa'],
            'admin_o2' => $row['zamovlennia_b4ao'],
            'nurse_a2' => $row['naiavnist_b4na'],
            'nurse_o2' => $row['zamovlennia_b4no'],
            'admin_a3' => $row['naiavnist_b5aa'],
            'admin_o3' => $row['zamovlennia_b5ao'],
            'nurse_a3' => $row['naiavnist_b5na'],
            'nurse_o3' => $row['zamovlennia_b5no'],
            'admin_a4' => $row['naiavnist_b6aa'],
            'admin_o4' => $row['zamovlennia_b6ao'],
            'nurse_a4' => $row['naiavnist_b6na'],
            'nurse_o4' => $row['zamovlennia_b6no'],
            'admin_a5' => $row['naiavnist_b8aa'],
            'admin_o5' => $row['zamovlennia_b8ao'],
            'nurse_a5' => $row['naiavnist_b8na'],
            'nurse_o5' => $row['zamovlennia_b8no'],
            'admin_a6' => $row['naiavnist_b5a'],
            'admin_o6' => $row['zamovlennia_b5o'],
            'admin_a7' => $row['naiavnist_la'],
            'admin_o7' => $row['zamovlennia_lo'],
            'admin_a8' => $row['naiavnist_oa'],
            'admin_o8' => $row['zamovlennia_oo'],
            'admin_a9' => $row['naiavnist_b2a'],
            'admin_o9' => $row['zamovlennia_b2o'],
            'date' => $this->date,
        ]);
    }

    public function headingRow() : int
    {
        return 3;
    }
}
