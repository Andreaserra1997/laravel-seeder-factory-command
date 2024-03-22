<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container pt-5">
        <div class="card">
            <img src="{{ $product->image }}" class="card-img-top mx-auto" alt="{{ $product->name }}" style="width: 400px">
            <div class="card-body text-center">
                <p style="color: {{ $product->category->color }}">{{ $product->category->label }}</p>
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">Codice EAN: {{ $product->isbn }}</p>
                <p class="card-text">Prezzo: {{ $product->price }} €</p>
                <p class="card-text">Visibilità: {{ $product->featured == 1 ? 'Attivo' : 'Disattivo' }}</p>
                <p class="card-text">Descrizione: {{ $product->description }}</p>
            </div>
        </div>
    </div>
</body>
</html>