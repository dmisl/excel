@extends('layout.main')

@section('title', 'Авторизація')

@section('content')

<div class="container">
    @if($errors->any())
        <div class="alert alert-danger pb-1 small" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row mt-5">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body" style="user-select: none;">
                    <h3>Авторизація</h3>
                </div>
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <div class="card-body" style="user-select: none;">
                        <div class="mb-2">
                            <label for="">Пошта</label>
                            <input value="{{ old('email') }}" name="email" autofocus selected class="form-control text-center" type="text">
                        </div>
                        <div class="mb-2">
                            <label for="">Пароль</label>
                            <input value="{{ old('password') }}" name="password" class="form-control text-center" type="password">
                        </div>
                    </div>
                    <div class="card-body text-center" style="user-select: none;">
                        <button type="submit" class="btn btn-primary">Увійти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
