@extends('layouts.auth')

@section('title', 'Регистрация')

@section('form')

<h1 class="text-3xl font-medium">Регистрация</h1>

<form action="{{ route('register_process') }}" class="space-y-5 mt-5" method="post">
    @csrf
    <div class="form-group">
        <label for="fname">Имя</label>
        <input type="text" class="form-control @error('fname') border border-danger @enderror" id="fname" name="fname" placeholder="Введите имя">
        @error('fname')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="lname">Фамилия</label>
        <input type="text" class="form-control @error('fname') border border-danger @enderror" id="lname" name="lname" placeholder="Введите фамилию">
        @error('lname')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

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
    </div>
    <div class="form-group">
        <label for="password_confirmation">Подтверждение пароля</label>
        <input type="password" class="form-control @error('fname') border border-danger @enderror" id="password_confirmation" name="password_confirmation" placeholder="Подтверждение пароля">
        @error('password')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="bdate">Дата рождения</label>
        <input type="date" class="form-control @error('fname') border border-danger @enderror" id="bdate" name="bdate" placeholder="Дата рождения">
        @error('bdate')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone_num">Номер телефона</label>
        <input class="form-control @error('fname') border border-danger @enderror" type="tel" value="+7(___)___-__-__" pattern="\+7\s?[\(]{0,1}7[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" maxlength="17" name="phone_num" id="phone_num" placeholder="+7(___)___-__-__">
        @error('phone_num')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="u_gender">Пол</label>
        <select class="custom-select @error('fname') border border-danger @enderror" name="u_gender" id="u_gender">
            <option hidden disabled selected value></option>
            <option value="Мужской">Мужской</option>
            <option value="Женский">Женский</option>
        </select>
        @error('u_gender')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <a href="/" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Есть аккаунт?</a>
    </div>
    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</form>
@endsection
