@extends('layouts.app')

@section('content')
    <main>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($comics as $comic)
                    <div class="col">
                        <a class="card h-100 text-decoration-none" href="{{route('comics.show', $comic->id)}}">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}"
                                style="max-height: 300px; object-fit: cover; object-position: top;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body-secondary">{{ $comic->price }}</h6>
                                    <h6 class="text-body-secondary text-capitalize">{{ $comic->type }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

        </div>
    </main>
@endsection
