@extends('layouts.app')

@section('content')

    <div class="container mt-3">

        <h1>Edit the comic</h1>
    
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label text-capitalize">thumbnail</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" min="0" step="0.01" class="form-control" id="price" name="price" value="{{ substr($comic->price, 1) }}">
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date}}">
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>
    
            <div class="mb-3">
                <label for="artists" class="form-label">artists</label>
                <input artists="text" class="form-control" id="artists" name="artists" value="{{ implode(', ', json_decode($comic->artists)) }}">
            </div>
    
            <div class="mb-3">
                <label for="writers" class="form-label">writers</label>
                <input writers="text" class="form-control" id="writers" name="writers" value="{{ implode(', ', json_decode($comic->writers)) }}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
