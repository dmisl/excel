<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        tr, td, th
        {
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <table class="text-center small" style="border: 1px solid black; border-collapse: collapse;">
        <tr>
            <th rowspan="2"></th>
            <th colspan="4">B1</th>
            <th colspan="4">B4</th>
            <th colspan="4">B5</th>
            <th colspan="4">B6</th>
            <th colspan="4">B8</th>
            <th colspan="2">лікарня B5</th>
            <th colspan="2">лабораторія</th>
            <th colspan="2">офіс мц</th>
            <th colspan="2">B2</th>
        </tr>
        <tr>
            <th colspan="2">адміністратори</th>
            <th colspan="2">медсестри</th>
            <th colspan="2">адміністратори</th>
            <th colspan="2">медсестри</th>
            <th colspan="2">адміністратори</th>
            <th colspan="2">медсестри</th>
            <th colspan="2">адміністратори</th>
            <th colspan="2">медсестри</th>
            <th colspan="2">адміністратори</th>
            <th colspan="2">медсестри</th>
            <th colspan="2">#</th>
            <th colspan="2">#</th>
            <th colspan="2">#</th>
            <th colspan="2">#</th>
        </tr>
        <tr>
            <th>Назва продукту</th>
            <th style="background-color: #22b015;">наявність B1aa</th>
            <th style="background-color: #22b015;">замовлення B1ao</th>
            <th style="background-color: #22b015;">наявність B1na</th>
            <th style="background-color: #22b015;">замовлення B1no</th>
            <th style="background-color: #c93ddb">наявність B4aa</th>
            <th style="background-color: #c93ddb">замовлення B4ao</th>
            <th style="background-color: #c93ddb">наявність B4na</th>
            <th style="background-color: #c93ddb">замовлення B4no</th>
            <th style="background-color: #fac32d">наявність B5aa</th>
            <th style="background-color: #fac32d">замовлення B5ao</th>
            <th style="background-color: #fac32d;">наявність B5na</th>
            <th style="background-color: #fac32d;">замовлення B5no</th>
            <th style="background-color: #62fce5;">наявність B6aa</th>
            <th style="background-color: #62fce5;">замовлення B6ao</th>
            <th style="background-color: #62fce5">наявність B6na</th>
            <th style="background-color: #62fce5">замовлення B6no</th>
            <th style="background-color: #02bda1">наявність B8aa</th>
            <th style="background-color: #02bda1">замовлення B8ao</th>
            <th style="background-color: #02bda1">наявність B8na</th>
            <th style="background-color: #02bda1">замовлення B8no</th>
            <th style="background-color: #bff5e7;">наявність #B5a</th>
            <th style="background-color: #edda2b;">замовлення #B5o</th>
            <th style="background-color: #d1d0c7">наявність #la</th>
            <th style="background-color: #a3a295">замовлення #lo</th>
            <th style="background-color: #5aed95">наявність #oa</th>
            <th style="background-color: #1ced3f">замовлення #oo</th>
            <th style="background-color: #b1bdb3">наявність #B2a</th>
            <th style="background-color: #ff9eb6">замовлення #B2o</th>
        </tr>
        @foreach ($stationeries as $stationery)
            <tr>
                <td>{{ $stationery->product_name }}</td>
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
</body>
</html>

