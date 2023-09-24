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

        <h1 class="text-center">{{ $order->date }}</h1>

        <div class="text-center">
            <form action="{{ route('stationery.export') }}" method="POST">
                @csrf
                <input type="hidden" name="date" value="{{ $date }}">
                <button class="btn btn-primary" type="submit">Скачати</button>
            </form>
        </div>

        <h1></h1>
        <div style="overflow:scroll; height: 500px;">
            <table class="table table-dark text-center small stationery" style="border: 1px solid black; border-collapse: collapse;">
                
            </table>
        </div>
    </div>
@endsection
