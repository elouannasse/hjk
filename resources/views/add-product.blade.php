<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>add new product</h2>
    <form action="{{ url("products") }}" method ="POST">
        @csrf
        <input type="text" name="name">
        <input type="text" name="description">
        <input type="number" name = "price">
        <input type="number" name = "quantity">
        <button type="submit">add product</button>


        
    
</body>
</html>