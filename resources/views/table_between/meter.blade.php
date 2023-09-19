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
<table class="text-center small" style="border: 1px solid black; border-collapse: collapse;">
    <tr>
        <th style="background-color: #669aed;"><h3><i>Дані лічильників</i></h3></th>
        <th style="background-color: #669aed;"><i>Кінець місяця1</i></th>
        <th style="background-color: #669aed;"><i>Кінець місяця2</i></th>
        <th style="background-color: #669aed;"><i>Кінець місяця3</i></th>
        <th style="background-color: #669aed;"><i>Кінець місяця4</i></th>
        <th style="background-color: #669aed;"><i>Кінець місяця5</i></th>
        <th style="background-color: #669aed;"><i>Кінець місяця6</i></th>
        <th style="background-color: #669aed;"><i>ДАТА</i></th>
    </tr>
    @foreach ($meters as $meter)
        <tr>
            <td style="background-color: #669aed;"><i>{{ $meter->data }}</i></td>
            <td style="background-color: #669aed;">{{ $meter->month1 }}</td>
            <td style="background-color: #669aed;">{{ $meter->month2 }}</td>
            <td style="background-color: #669aed;">{{ $meter->month3 }}</td>
            <td style="background-color: #669aed;">{{ $meter->month4 }}</td>
            <td style="background-color: #669aed;">{{ $meter->month5 }}</td>
            <td style="background-color: #669aed;">{{ $meter->month6 }}</td>
            <td style="background-color: #669aed;">{{ $meter->date }}</td>
        </tr>
    @endforeach
</table>
