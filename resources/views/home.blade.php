<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>
    <h1>Benvenuto nel Blog Viaggi</h1>
    <p>Scopri itinerari e consigli di viaggio.</p>

    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('articoli') }}">Articoli</a></li>
    </ul>
</body>
</html>