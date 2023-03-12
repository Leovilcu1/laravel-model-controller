<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <h1 class="text-center">Movies</h1>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach ($movies as $movie)
                        <div class="col">
                          <div class="card">
                            <img src="." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">titolo : {{ $movie->title }}</h5>
                              <p class="card-text">titolo originale :  {{ $movie->original_title }}</p>
                              <p class="card-text">lingua :  {{ $movie->nationality }}</p>
                              <p class="card-text">data :  {{ $movie->date }}</p>
                              <p class="card-text">voto :  {{ $movie->vote }}</p>
                            </div>
                          </div>
                        </div>
                    @endforeach
            </div>
        </main>

    </body>
</html>
