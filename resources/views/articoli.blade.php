<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Articoli</title>
</head>
<body>
    <h1>Tutti gli articoli</h1>

    <ul>
        @foreach ($all_articoli as $articolo)
            <li>
                <a href="{{ route('articolo_dettaglio', ['id' => $articolo['id']]) }}">
                    {{ $articolo['titolo'] }}
                </a>
                <p>{{ $articolo['descrizione'] }}</p>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Homepage</a>
</body>
</html>