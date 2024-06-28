<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>{{ $benvenuto }}</h1>

    @foreach ($films as $film)
        <div class="card">
            <h3>{{ $film['title'] }}</h3>
            <p>{{ $film['description'] }}</p>
            <img src="{{ $film['thumb'] }}">
            <p>Price: {{ $film['price'] }}</p>
            <p>Date: {{ $film['sale_date'] }}</p>
        </div>
    @endforeach

</body>

</html>
