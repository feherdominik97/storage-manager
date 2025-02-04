<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category['name'] }}</title>
</head>
<body>
    <h1>Products in {{ $category['name'] }}</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('product.show', $product['id']) }}"> {{ $product['name'] }} - ${{ number_format($product['price'], 2) }} </a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('home') }}">Back to Categories</a>
</body>
</html>
