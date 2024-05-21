@extends('layouts.app')

<main class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="min-vh-100 py-5 d-flex flex-wrap gap-3 justify-content-center">
                    {{-- single card --}}
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            {{-- chiamo index dal controller --}}
                            <p class="card-text">{{ $movie->title }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


</html>
