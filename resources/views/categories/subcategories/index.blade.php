@extends('layouts.app')

@section('title', 'Категории')

@section('content')

    @foreach($subcategories as $subcategory)
        @include('categories.subcategories.item', ['subcategory' => $subcategory, 'section_symbol_code'=>$section_symbol_code])
    @endforeach

@endsection
