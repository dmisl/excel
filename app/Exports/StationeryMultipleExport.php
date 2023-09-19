<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class StationeryMultipleExport implements WithMultipleSheets
{
    private $date;

    public function __construct($date, $between = 'asd')
    {
        $this->date = $date;
    }

    public function sheets(): array
    {
        return [
            'Канцтовари' => new StationeriesExport($this->date),
            'Кава' => new CoffeeExport($this->date),
            'Дані лічильника' => new MeterExport($this->date)
        ];
    }
}
