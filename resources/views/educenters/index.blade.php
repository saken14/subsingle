@extends('layouts.app')

@section('title', $categoryName->name)

@section('content')
    <h2>{{ $categoryName->name }}</h2><br>
    <div class="card-deck">
    @foreach($eduCenters as $eduCenter)
        @include('educenters.partials.item', ['eduCenter' => $eduCenter, 'categoryName' => $categoryName->name])
    @endforeach
    </div>

@endsection
