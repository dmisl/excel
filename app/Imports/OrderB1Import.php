<?php

namespace App\Imports;

use App\Models\OrderB1;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OrderB1Import implements ToModel, WithHeadingRow
{

    public $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new OrderB1([
            'product' => $row['a'],
            'm1' => $row['1_zamov_m'],
            'm2' => $row['2_zamov_m'],
            's1' => $row['1_zamov_s'],
            's2' => $row['2_zamov_s'],
            'l1' => $row['1_zamov_l'],
            'l2' => $row['2_zamov_l'],
            'h1' => $row['1_zamov_h'],
            'h2' => $row['2_zamov_h'],
            'o1' => $row['1_zamov_o'],
            'o2' => $row['2_zamov_o'],
            't1' => $row['t1'],
            't2' => $row['t2'],
            'aa' => $row['aa'],
            'be' => $row['be'],
            'date' => $this->date,
        ]);
    }

    public function headingRow() : int
    {
        return 3;
    }
}
