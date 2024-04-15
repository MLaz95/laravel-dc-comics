@extends('layouts.app')

@section('content')

    <div class="container my-5">

        <h1>Edit the comic</h1>
    
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $comic->title }}" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control  @error('description') is-invalid @enderror" id="description" name="description">{{ $comic->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label text-capitalize">thumbnail</label>
                <input type="text" class="form-control  @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" min="0" step="0.01" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" value="{{ substr($comic->price, 1) }}" required>
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control  @error('series') is-invalid @enderror" id="series" name="series" value="{{ $comic->series }}">
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="date" class="form-control  @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ $comic->sale_date}}" required>
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control  @error('type') is-invalid @enderror" id="type" name="type" value="{{ $comic->type }}" required>
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="artists" class="form-label">artists</label>
                <input artists="text" class="form-control  @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{ implode(', ', json_decode($comic->artists)) }}" required>
                @error('artists')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="writers" class="form-label">writers</label> required
                <input writers="text" class="form-control  @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{ implode(', ', json_decode($comic->writers)) }}" required>
                @error('writers')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex gap-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('comics.show', $comic->id)}}" class="btn btn-secondary">Back</a>

            </div>
        </form>
    </div>
@endsection
