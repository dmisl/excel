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
                <th>Корпорація Кави</th>
                <th colspan="6">Залишки</th>
            </tr>
            <tr>
                <th>Товар</th>
                <th style="background-color: #3ddbe0;">B1, Ч.Калини 68</th>
                <th style="background-color: #487af0;">B4, Щирецька 36</th>
                <th style="background-color: #d168e8;">B5, Чорновола 43а</th>
                <th style="background-color: #3be387;">Лікарня 5, Чорновола 43а</th>
                <th style="background-color: #6f9bde;">B6, Шептицького 3 (Новояворівськ)</th>
                <th style="background-color: #db2c5e;">B8, Ковалика 1а</th>
            </tr>
            @foreach ($coffee as $coffee)
                <tr>
                    <th>{{ $coffee->goods }}</th>
                    <td>{{ $coffee->street1 }}</td>
                    <td>{{ $coffee->street2 }}</td>
                    <td>{{ $coffee->street3 }}</td>
                    <td>{{ $coffee->street4 }}</td>
                    <td>{{ $coffee->street5 }}</td>
                    <td>{{ $coffee->street6 }}</td>
                </tr>
            @endforeach
        </table>
</body>
</html>
