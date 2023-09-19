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

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function view(): View
    {
        return view('tables.coffee', ['coffee' => Coffee::query()->where('date', '=', $this->date)->get()]);
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
