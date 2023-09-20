<?php

namespace App\Exports;

use App\Models\Stationery;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class StationeriesExport implements FromView, ShouldAutoSize, WithStyles
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

    public function view(): View
    {
        if($this->date)
        {
            return view('tables.stationery', ['stationeries' => Stationery::query()->where('date', '=', $this->date)->get()]);
        } else if($this->date_from && $this->date_to)
        {
            return view('table_between.stationery', ['stationeries' => Stationery::query()->whereBetween('date', [$this->date_from, $this->date_to])->get()]);
        }
    }

    public function styles(Worksheet $sheet)
    {
        $rows = Stationery::all()->count()+3;

        $sheet->getStyle("B1:AC$rows")->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
        $sheet->getStyle("A1:AC$rows")->applyFromArray($styleArray);

    }


}
