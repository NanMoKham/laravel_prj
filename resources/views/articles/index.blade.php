<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ARTICLES</title>
    </head>

    <body>
        <h1>Article List : </h1>
        <ul>
            @foreach($articles as $article)
            <li>{{ $article['title'] }}</li>
            @endforeach
        </ul>
    </body>

</html>
