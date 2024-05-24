<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                @foreach ($trains as $train)
                    <div class="card col-4">
                        <div class="card-body">
                            <h4>{{$train->company}}</h4>
                            <p>Partenza da:</p>
                            <h3>{{$train->departing_station}}</h3>
                            <p>Alle ore: {{$train->departing_time}}</p>
                            <p>Arrivo a:</p>
                            <h3>{{$train->arriving_station}}</h3>
                            <p>Alle ore: {{$train->arriving_time}}</p>
                            <h5>Codice treno -> {{$train->train_code}}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>