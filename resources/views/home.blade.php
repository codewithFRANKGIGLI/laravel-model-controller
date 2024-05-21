@extends('layouts.app')
@section('content')
    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col py-5 d-flex flex-wrap">
                    @foreach ($movies as $movie)
                        {{-- single card --}}
                        <div class="card m-3" style="width: 18rem;">
                            <div class="card-body">
                                {{-- chiamo index dal controller --}}
                                <h2 class="card-title fw-bold">Titolo: {{ $movie->title }}</h2>
                                <p>Titolo originale: {{ $movie->original_title }}</p>
                                <p>Nazione: {{ $movie->nationality }}</p>
                                <p>Data di uscita: {{ $movie->date }}</p>
                                <p>Voto: {{ $movie->vote }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
