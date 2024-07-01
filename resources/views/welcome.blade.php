@extends('layout.app')

@section('title.', 'Home')
@section('content')

    <h1>{{ $benvenuto }}</h1>

    <div>

        @foreach ($films as $film)
            <div class="card">
                <h3>{{ $film['title'] }}</h3>
                <p>{{ $film['description'] }}</p>
                <img src="{{ $film['thumb'] }}">
                <p>Price: {{ $film['price'] }}</p>
                <p>Date: {{ $film['sale_date'] }}</p>
            </div>
        @endforeach

    @endsection
