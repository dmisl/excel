<?php

namespace App\Exports;

use App\Models\Meter;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class MeterExport implements FromView, WithTitle, WithStyles, ShouldAutoSize
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
            return view('tables.meter', ['meters' => Meter::query()->where('date', '=', $this->date)->get()]);
        } else if($this->date_from && $this->date_to)
        {
            return view('table_between.meter', ['meters' => Meter::query()->whereBetween('date', [$this->date_from, $this->date_to])->get()]);
        }
    }

    public function title(): string
    {
        return 'Кава';
    }


    public function styles(Worksheet $sheet)
    {
        $rows = Meter::all()->count() + 1;

        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
        $sheet->getStyle("A1:G$rows")->applyFromArray($styleArray);

        $sheet->getStyle("B1:G$rows")->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    }

}
