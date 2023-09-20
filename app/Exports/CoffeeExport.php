<?php

namespace App\Exports;

use App\Models\Coffee;
use App\Models\Meter;
use App\Models\Stationery;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CoffeeExport implements FromView, WithTitle, WithHeadings, WithStyles, ShouldAutoSize
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
            return view('tables.coffee', ['coffee' => Coffee::query()->where('date', '=', $this->date)->get()]);
        } else if($this->date_from && $this->date_to)
        {
            return view('table_between.coffee', ['coffee' => Coffee::query()->whereBetween('date', [$this->date_from, $this->date_to])->get()]);
        }
    }

    public function title(): string
    {
        return 'Кава';
    }

    public function headings(): array
    {
        return [
            [
                'Корпорація Кави',
                'Залишки',
            ],
            [
                'Товар',
                'B1, Ч.Калини 68',
                'B4, Щирецька 36',
                'B5, Чорновола 43а',
                'Лікарня 5, Чорновола 43а',
                'B8, Ковалика 1а',
            ]
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $rows = Coffee::all()->count() + 2;

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
