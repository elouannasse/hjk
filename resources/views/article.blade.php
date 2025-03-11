<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>list de products</h2>
    <a href="{{ "articls/create" }}">add new article</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
            
            
            </tr>

        </thead>
        @foreach ($articls as $article )
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->name }}</td>
            <td>{{ $article->description }}</td>
            
        
        </tr>
        
        @endforeach
    </table>
    
</body>
</html>