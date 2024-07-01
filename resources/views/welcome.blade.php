@extends('layout.app')

@section('title.', 'Home')
@section('content')

    <div class="card-container">
        @foreach ($films as $film)
            <div class="card">
                <img src="{{ $film['thumb'] }}">
                <h3>{{ $film['title'] }}</h3>
                <p>{{ $film['description'] }}</p>
                <p>Price: {{ $film['price'] }}</p>
                <p>Date: {{ $film['sale_date'] }}</p>
            </div>
        @endforeach

    @endsection
