<?php

namespace App\Imports;

use App\Models\Coffee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CoffeeImport implements ToModel, WithHeadingRow
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
        return new Coffee([
            'goods' => $row['tovar'],
            'street1' => $row['b1_ckalini_68'],
            'street2' => $row['b4_shhirecka_36'],
            'street3' => $row['b5_cornovola_43a'],
            'street4' => $row['likarnia_5_cornovola_43a'],
            'street5' => $row['b6_septickogo_3_novoiavorivsk'],
            'street6' => $row['b8_kovalika_1a'],
            'date' => $this->date,
        ]);
    }

    public function headingRow() : int
    {
        return 2;
    }
}
