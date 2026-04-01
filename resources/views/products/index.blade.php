<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>каталог</title>
</head>
<body>
    <div class="container">
    <a href="{{ route('products.create') }}">Создание продукта</a>
        @foreach ($products as $product)
            
        <div class="card">
            <h2>{{ $product->title }}</h2>
            <p>{{ $product->price }}</p>
            <p>{{ $product->description }}</p>
        </div>

        @endforeach
    </div>
</body>
</html>