<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class StationeryMultipleExport implements WithMultipleSheets
{
    private $date;
    private $date_from;
    private $date_to;

    public function __construct($date = 0, $date_from = 0, $date_to = 0)
    {
        $this->date = $date;
        $this->date_from = $date_from;
        $this->date_to = $date_to;
    }

    public function sheets(): array
    {
        if($this->date)
        {
            return [
                'Канцтовари' => new StationeriesExport($this->date),
                'Кава' => new CoffeeExport($this->date),
                'Дані лічильника' => new MeterExport($this->date)
            ];
        } else if($this->date_from && $this->date_to)
        {
            return [
                'Канцтовари' => new StationeriesExport(0, $this->date_from, $this->date_to),
                'Кава' => new CoffeeExport(0, $this->date_from, $this->date_to),
                'Дані лічильника' => new MeterExport(0, $this->date_from, $this->date_to)
            ];
        }
    }
}
