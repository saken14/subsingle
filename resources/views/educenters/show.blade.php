@extends('layouts.app')

@section('title', $eduCenter->name)

@section('content')

    <p><b>Имя:</b> {{ $eduCenter->name }}</p>
    <p><b>Описание:</b> {{ $eduCenter->description }}</p>
    <p><b>Адрес:</b> {{ $eduCenter->address }}</p>
    <p><b>Номер тел.:</b> {{ $eduCenter->phone_num }}</p>
    <p><b>Емайл:</b> {{ $eduCenter->email }}</p>
    <p><b>Сайт:</b> {{ $eduCenter->web_site }}</p>
    <p><b>Рейтинг:</b> {{ $eduCenter->rating }}</p>

@endsection
