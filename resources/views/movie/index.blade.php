@extends('layouts.app')

@section('content')
    <div class="body-movies pt-5">
        <div class="container d-flex justify-content-center">
            <div class="row g-3">
                @foreach ($movies as $movie)
                    <div class="col-4">
                        <div class="card text-white" style="width: 18rem;">
                            <div class="card-body">
                                <h4 class="card-title fw-bold text-center">{{ $movie->title }}</h4>
                                <h6 class="card-subtitle mb-2 text-center">{{ $movie->original_title }}</h6>
                                <p class="card-text"><span class="fw-bold">Nationality:</span> {{ $movie->nationality }}</p>
                                <p class="card-text"><span class="fw-bold">Year:</span> {{ $movie->date }}</p>
                                <p class="card-text"><span class="fw-bold">Vote:</span> {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
