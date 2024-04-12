@extends('layouts/app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between my-3">
            <a href="{{ route('comics.index') }}" class="btn btn-outline-primary m-3">Back</a>

            <div class="d-flex gap-3 align-items-center">
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-outline-info">Edit</a>
                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
            </div>
        </div>
        <div class="d-flex gap-5">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="max-width: 500px; object-fit: cover;">
            <div>
                <h2>{{ $comic->title }}</h2>
                <div class="d-flex gap-5 w-100 justify-content-between">
                    <h3 class="text-body-secondary">{{ $comic->series }}</h3>
                    <h3 class="text-body-secondary">{{ $comic->price }}</h3>
                    <h3 class="text-body-secondary">{{ $comic->sale_date }}</h3>
                </div>
                <p>{{ $comic->description }}</p>
                <div class="d-flex gap-5">
                    <div>
                        <h4>Arists</h4>
                        <ul>
                            @php
                                foreach (json_decode($comic->artists) as $artist) {
                                    echo '<li>' . $artist . '</li>';
                                }
                            @endphp
                        </ul>

                    </div>

                    <div>
                        <h4>Writers</h4>
                        <ul>
                            @php
                                foreach (json_decode($comic->writers) as $writer) {
                                    echo '<li>' . $writer . '</li>';
                                }
                            @endphp
                        </ul>

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">Are you sure you wish to delete this comic?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Go Back</button>

                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method("DELETE")

                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
