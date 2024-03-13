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
    <div class="container p-3 d-flex flex-wrap gap-3">
      @foreach ($products as $product)
      <div class="card" style="width: 15rem;">
        <img src="{{ $product->img}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $product->name}}</h5>
          <p class="card-text">{{ $product->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Codice EAN: {{ $product->codeEan}}</li>
          <li class="list-group-item">Prezzo: {{ $product->price}} €</li>
          <li class="list-group-item">Visibilità: {{ $product->highlight == 1 ? 'Attivo' : 'Disattivo'}}</li>
        </ul>
      </div>
      @endforeach
    </div>
</body>
</html>