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
  <h1 class="text-center pt-5">Featured Products</h1>
    <div class="container p-3 d-flex flex-wrap gap-3">
      @foreach ($featured_products as $product)
      <div class="card" style="width: 15rem;">
        <img src="{{ $product->image}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="text-center" style="background-color: {{ $product->category->color }}">{{ $product->category->label }}</p>
          <h5 class="card-title">{{ $product->name}}</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Codice EAN: {{ $product->isbn}}</li>
          <li class="list-group-item">Prezzo: {{ $product->price}} €</li>
          <li class="list-group-item">Visibilità: {{ $product->featured == 1 ? 'Attivo' : 'Disattivo'}}</li>
        </ul>
        <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-primary">View</a>
      </div>
      @endforeach
    </div>
</body>
</html>