@extends('layouts.auth')

@section('title', 'Вход')

@section('form')

    <h1 class="text-3xl font-medium">Вход</h1>

    <form action="{{ route('login_process') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('fname') border border-danger @enderror" id="email" name="email" placeholder="Введите email">
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control @error('fname') border border-danger @enderror" id="password" name="password" placeholder="Пароль">
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <a href="{{--{{ route("forgot") }}--}}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Забыли пароль?</a>
        </div>
        <div>
            <a href="{{ route("register") }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Регистрация</a>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
@endsection
