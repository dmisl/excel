<?php

namespace App\Imports;

use App\Models\Stationery;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class StationeryMultipleImport implements WithMultipleSheets
{
    /**
    * @param Collection $collection
    */

    private $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function sheets(): array
    {
        return [
            new StationeryImport($this->date), new CoffeeImport($this->date), new MeterImport($this->date)
        ];
    }
}
