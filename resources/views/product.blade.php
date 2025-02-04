<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product['name'] }}</title>
</head>
<body>
    <h1> {{ $product['name'] }} </h1>
    <div>
        <label>Price:</label>
        <span>{{ number_format($product['price'], 2) }}</span>
    </div>
    <br>
    <a href="{{ route('home') }}">Back to Categories</a>
</body>
</html>
