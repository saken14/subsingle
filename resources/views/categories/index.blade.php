@extends('layouts.app')

@section('title', 'Категории')

@section('content')

    @foreach($categories as $category)
        @include('categories.partials.item', ['category' => $category])
    @endforeach

@endsection
