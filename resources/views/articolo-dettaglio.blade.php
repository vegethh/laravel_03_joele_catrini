<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>{{ $articolo['titolo'] }}</title>
</head>
<body>
    <h1>{{ $articolo['titolo'] }}</h1>
    <p><strong>{{ $articolo['descrizione'] }}</strong></p>
    <p>{{ $articolo['contenuto'] }}</p>

    <a href="{{ route('articoli') }}">Torna agli articoli</a><br>
    <a href="{{ route('home') }}">Homepage</a>
</body>
</html>