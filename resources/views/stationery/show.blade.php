@extends('layout.main')

@section('title', 'Канцтовари')

@section('content')
    <style>
        tr, td, th
        {
            border: 1px solid black;
            font-size: 13px;
        }

        .thead
        {
            position: sticky;
            top: 0;
            z-index: 30;
            background-color: white;
        }

        .tbody
        {
            position: sticky;
            left: 0;
            background: white;
            z-index: 29;
        }

    </style>
    <div class="container">

        <h1 class="text-center">{{ $date }}</h1>

        <div class="text-center">
            <form action="{{ route('stationery.export') }}" method="POST">
                @csrf
                <input type="hidden" name="date" value="{{ $date }}">
                <button class="btn btn-primary" type="submit">Скачати</button>
            </form>
        </div>

        <h1>Канцелярія</h1>
        <div style="overflow:scroll; height: 500px;">
            <table class="table table-dark text-center small stationery" style="border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td rowspan="3"></td>
                    <th class="thead" colspan="4">B1</th>
                    <th class="thead" colspan="4">B4</th>
                    <th class="thead" colspan="4">B5</th>
                    <th class="thead" colspan="4">B6</th>
                    <th class="thead" colspan="4">B8</th>
                    <th class="thead" colspan="2">лікарня B5</th>
                    <th class="thead" colspan="2">лабораторія</th>
                    <th class="thead" colspan="2">офіс мц</th>
                    <th class="thead" colspan="2">B2</th>
                </tr>
                <tr>
                    <td colspan="2">адміністратори</td>
                    <td colspan="2">медсестри</td>
                    <td colspan="2">адміністратори</td>
                    <td colspan="2">медсестри</td>
                    <td colspan="2">адміністратори</td>
                    <td colspan="2">медсестри</td>
                    <td colspan="2">адміністратори</td>
                    <td colspan="2">медсестри</td>
                    <td colspan="2">адміністратори</td>
                    <td colspan="2">медсестри</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td style="background-color: #22b015;">наявність</td>
                    <td style="background-color: #22b015;">замовлення</td>
                    <td style="background-color: #22b015;">наявність</td>
                    <td style="background-color: #22b015;">замовлення</td>
                    <td style="background-color: #c93ddb">наявність</td>
                    <td style="background-color: #c93ddb">замовлення</td>
                    <td style="background-color: #c93ddb">наявність</td>
                    <td style="background-color: #c93ddb">замовлення</td>
                    <td style="background-color: #fac32d">наявність</td>
                    <td style="background-color: #fac32d">замовлення</td>
                    <td style="background-color: #fac32d;">наявність</td>
                    <td style="background-color: #fac32d;">замовлення</td>
                    <td style="background-color: #62fce5;">наявність</td>
                    <td style="background-color: #62fce5;">замовлення</td>
                    <td style="background-color: #62fce5">наявність</td>
                    <td style="background-color: #62fce5">замовлення</td>
                    <td style="background-color: #02bda1">наявність</td>
                    <td style="background-color: #02bda1">замовлення</td>
                    <td style="background-color: #02bda1">наявність</td>
                    <td style="background-color: #02bda1">замовлення</td>
                    <td style="background-color: #bff5e7;">наявність</td>
                    <td style="background-color: #edda2b;">замовлення</td>
                    <td style="background-color: #d1d0c7">наявність</td>
                    <td style="background-color: #a3a295">замовлення</td>
                    <td style="background-color: #5aed95">наявність</td>
                    <td style="background-color: #1ced3f">замовлення</td>
                    <td style="background-color: #b1bdb3">наявність</td>
                    <td style="background-color: #ff9eb6">замовлення</td>
                </tr>
                @foreach ($stationeries as $stationery)
                    <tr>
                        <td class="tbody" style="font-size: 15px; width: 100px;">{{ $stationery->product_name }}</td>
                        <td style="background-color: #6fdb65;">{{ $stationery->admin_a1 }}</td>
                        <td style="background-color: #22b015;">{{ $stationery->admin_o1 }}</td>
                        <td style="background-color: #6fdb65;">{{ $stationery->nurse_o1 }}</td>
                        <td style="background-color: #22b015;">{{ $stationery->nurse_o1 }}</td>
                        <td style="background-color: #dd89e8">{{ $stationery->admin_a2 }}</td>
                        <td style="background-color: #c93ddb">{{ $stationery->admin_o2 }}</td>
                        <td style="background-color: #dd89e8">{{ $stationery->nurse_o2 }}</td>
                        <td style="background-color: #c93ddb">{{ $stationery->nurse_o2 }}</td>
                        <td style="background-color: #ffd666;">{{ $stationery->admin_a3 }}</td>
                        <td style="background-color: #fac32d;">{{ $stationery->admin_o3 }}</td>
                        <td style="background-color: #ffd666;">{{ $stationery->nurse_o3 }}</td>
                        <td style="background-color: #fac32d;">{{ $stationery->nurse_o3 }}</td>
                        <td style="background-color: #affaef">{{ $stationery->admin_a4 }}</td>
                        <td style="background-color: #62fce5">{{ $stationery->admin_o4 }}</td>
                        <td style="background-color: #affaef">{{ $stationery->nurse_o4 }}</td>
                        <td style="background-color: #62fce5">{{ $stationery->nurse_o4 }}</td>
                        <td style="background-color: #45ad92">{{ $stationery->admin_a5 }}</td>
                        <td style="background-color: #02bda1">{{ $stationery->admin_o5 }}</td>
                        <td style="background-color: #45ad92">{{ $stationery->nurse_o5 }}</td>
                        <td style="background-color: #02bda1">{{ $stationery->nurse_o5 }}</td>
                        <td style="background-color: #bff5e7">{{ $stationery->admin_a6 }}</td>
                        <td style="background-color: #edda2b">{{ $stationery->admin_o6 }}</td>
                        <td style="background-color: #d1d0c7">{{ $stationery->admin_a7 }}</td>
                        <td style="background-color: #a3a295">{{ $stationery->admin_o7 }}</td>
                        <td style="background-color: #5aed95">{{ $stationery->admin_a8 }}</td>
                        <td style="background-color: #1ced3f">{{ $stationery->admin_o8 }}</td>
                        <td style="background-color: #b1bdb3">{{ $stationery->admin_a9 }}</td>
                        <td style="background-color: #ff9eb6">{{ $stationery->admin_o9 }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

            <h1>Кава</h1>
        <div style="overflow:scroll; height: 500px;">
            <table class="table table-dark text-center small" style="border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <th>Корпорація Кави</th>
                    <th colspan="6">Залишки</th>
                </tr>
                <tr>
                    <th>Товар</th>
                    <th class="thead" style="background-color: #3ddbe0;">B1, Ч.Калини 68</th>
                    <th class="thead" style="background-color: #487af0;">B4, Щирецька 36</th>
                    <th class="thead" style="background-color: #d168e8;">B5, Чорновола 43а</th>
                    <th class="thead" style="background-color: #3be387;">Лікарня 5, Чорновола 43а</th>
                    <th class="thead" style="background-color: #6f9bde;">B6, Шептицького 3 (Новояворівськ)</th>
                    <th class="thead" style="background-color: #db2c5e;">B8, Ковалика 1а</th>
                </tr>
                @foreach ($coffee as $coffee)
                    <tr>
                        <th class="tbody">{{ $coffee->goods }}</th>
                        <td>{{ $coffee->street1 }}</td>
                        <td>{{ $coffee->street2 }}</td>
                        <td>{{ $coffee->street3 }}</td>
                        <td>{{ $coffee->street4 }}</td>
                        <td>{{ $coffee->street5 }}</td>
                        <td>{{ $coffee->street6 }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
            <h1>Лічильники</h1>
        <div style="overflow:scroll; height: 500px;">
            <table class="table table-dark text-center small" style="border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <th class="thead" style="background-color: #669aed;"><h3><i>Дані лічильників</i></h3></th>
                    <th class="thead" style="background-color: #669aed;"><i>Кінець місяця</i></th>
                    <th class="thead" style="background-color: #669aed;"><i>Кінець місяця</i></th>
                    <th class="thead" style="background-color: #669aed;"><i>Кінець місяця</i></th>
                    <th class="thead" style="background-color: #669aed;"><i>Кінець місяця</i></th>
                    <th class="thead" style="background-color: #669aed;"><i>Кінець місяця</i></th>
                    <th class="thead" style="background-color: #669aed;"><i>Кінець місяця</i></th>
                </tr>
                @foreach ($meters as $meter)
                    <tr>
                        <td class="tbody" style="background-color: #669aed;"><i>{{ $meter->data }}</i></td>
                        <td class="tbody" style="background-color: #669aed;">{{ $meter->month1 }}</td>
                        <td class="tbody" style="background-color: #669aed;">{{ $meter->month2 }}</td>
                        <td class="tbody" style="background-color: #669aed;">{{ $meter->month3 }}</td>
                        <td class="tbody" style="background-color: #669aed;">{{ $meter->month4 }}</td>
                        <td class="tbody" style="background-color: #669aed;">{{ $meter->month5 }}</td>
                        <td class="tbody" style="background-color: #669aed;">{{ $meter->month6 }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
