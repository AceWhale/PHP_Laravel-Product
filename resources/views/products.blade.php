<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
</head>
<body>
<h1>Products Page</h1>
<ul>
    @foreach($products as $product)
        <li>
            <strong>{{ $product->name }}</strong><br>
            {{ $product->description }}<br>
            Цена: {{ $product->price }} грн<br>
            Категория: {{ $product->category->title ?? 'Без категории' }}
        </li>
        <hr>
    @endforeach
</ul>
</body>
</html>
