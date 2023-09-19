<?php

namespace App\Imports;

use App\Models\Meter;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MeterImport implements ToModel, WithHeadingRow
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
        return new Meter([
            'data' => $row['dani_licilnikiv'],
            'month1' => $row['kinec_misiacia1'],
            'month2' => $row['kinec_misiacia2'],
            'month3' => $row['kinec_misiacia3'],
            'month4' => $row['kinec_misiacia4'],
            'month5' => $row['kinec_misiacia5'],
            'month6' => $row['kinec_misiacia6'],
            'date' => $this->date,
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
