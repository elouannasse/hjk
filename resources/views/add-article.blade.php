<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>add new article</h2>
    <form action="{{ url("articls") }}" method ="POST">
        @csrf
        <input type="text" name="name">
        <input type="text" name="description">
    
        
        <button type="submit">add article</button>


        
    
</body>
</html>