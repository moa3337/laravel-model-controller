<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - Lista Movies</title>
    {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand  text-light" href="#">{{ env('APP_NAME') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{ route('homepage') }}">
            Home
            <span class="visually-hidden">(current)</span>
        </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="bg-secondary">
  <div class="container">
    <h2 class="text-danger pt-3">The Movies</h2>
    <div class="row g-3 py-4">
      @forelse ($movies as $movie)
      <div class="col-3">
        <div class="card h-100" style="width: 18rem;">
          <div class="card-body">
            <h4>
              {{ $movie->title }}
            </h4>
            <p>titolo originale: {{ $movie->original_title }}</p>
            <p>paese: {{ $movie->nationality }}</p>
            <p>uscita: {{ $movie->date }}</p>
            <p>voto: {{ $movie->vote }}</p>
          </div>
        </div>
      </div>
      @empty
      @endforelse
    </div>
  </div>

</main>
</body>
</html>