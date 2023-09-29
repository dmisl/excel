<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Vaccine;
use App\Models\VaccineHeader;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ilonka',
            'email' => 'admin@gmail.com',
            'password' => 'adminn',
        ]);

        VaccineHeader::insert([
            [
                'balance1' => 'залишок на початок місяця', 
                'used1' => 'використано',
                'adults1' => 'із них дорослі',
                'children1' => 'діти до року',
                'balance2' => 'залишок на початок місяця',
                'used2' => 'використано',
                'adults2' => 'із них дорослі',
                'children2' => 'діти до року',
                'balance3' => 'залишок на початок місяця',
                'used3' => 'використано',
                'adults3' => 'із них дорослі',
                'children3' => 'діти до року',
                'balance4' => 'залишок на початок місяця',
                'used4' => 'використано',
                'adults4' => 'із них дорослі',
                'children4' => 'діти до року',
                'balance5' => 'залишок на початок місяця',
                'used5' => 'використано',
                'adults5' => 'із них дорослі',
                'children5' => 'діти до року',
                'date' => '00-00-0000',
            ]
        ]);

        Vaccine::insert([
            [
                'name' => 'bostrix',
                'series' => 'AC37B409AK',
                'expiry' => '31.12.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'boostrix polio',
                'series' => 'AC39B161AM',
                'expiry' => '01.04.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'cervarix',
                'series' => 'AHPVA439AK',
                'expiry' => '01.02.2027',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'engerix B 1.0',
                'series' => 'AHBVD019BG',
                'expiry' => '01.03.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'havrix 720',
                'series' => 'AHAVC079BA',
                'expiry' => '01.09.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'hexaxim',
                'series' => 'U3N961V',
                'expiry' => '30.06.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'rotarix',
                'series' => 'AROLD550AB',
                'expiry' => '01.03.2025',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'rotateq',
                'series' => 'W024247',
                'expiry' => '01.03.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'infanrix hexa',
                'series' => 'A21CE133A',
                'expiry' => '01.09.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'infanrix ipv',
                'series' => 'AC20В424AB',
                'expiry' => '30.09.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Infanrix ipv+hib',
                'series' => 'A20CB596B',
                'expiry' => '01.03.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Pentaxim',
                'series' => 'VOC551V',
                'expiry' => '31.08.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Priorix',
                'series' => 'A69CF489B',
                'expiry' => '31.08.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Menactra',
                'series' => 'U7304AB',
                'expiry' => '01.06.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Prevenar 13',
                'series' => 'EN3965',
                'expiry' => '25.09.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Synflorix',
                'series' => 'ASPNB334AG',
                'expiry' => '01.12.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Tetraxim',
                'series' => 'U3L491V',
                'expiry' => '01.05.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Tetraxim',
                'series' => 'V3M101V',
                'expiry' => '02.05.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Twinrix',
                'series' => 'AHABB443AR',
                'expiry' => '30.04.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Nimenrix',
                'series' => 'DN0609',
                'expiry' => '30.01.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'М-М-РВАКСПРО',
                'series' => 'W012616',
                'expiry' => '01.02.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'vaxigrip',
                'series' => '',
                'expiry' => '',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'GC FLU ',
                'series' => 'Q60222059',
                'expiry' => '01.08.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'TicoVak 0,25/ФСМЕ Імун дит.',
                'series' => 'FT1573',
                'expiry' => '01.10.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'TicoVak 0,5/ФСМЕ Імун дор.',
                'series' => 'FT1574',
                'expiry' => '01.10.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Gardasil',
                'series' => 'W005755',
                'expiry' => '01.10.2024',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Gardasil',
                'series' => 'UO26197',
                'expiry' => '01.08.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Stamaril',
                'series' => '',
                'expiry' => '',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'Tifim',
                'series' => '',
                'expiry' => '',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'CoronaVac',
                'series' => 'L202109119',
                'expiry' => '12.09.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'CoronaVac',
                'series' => 'J202107051',
                'expiry' => '07.07.2023',
                'date' => '00-00-0000',
            ],
            [
                'name' => 'PFIZER Comirnaty',
                'series' => '',
                'expiry' => '',
                'date' => '00-00-0000',
            ],
        ]);
    }
}
