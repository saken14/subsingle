@extends('layouts.app')

@section('title', 'Разделы')

@section('content')

    @foreach($categories as $category)
        @include('categories.partials.item', ['category' => $category])
    @endforeach

@endsection
