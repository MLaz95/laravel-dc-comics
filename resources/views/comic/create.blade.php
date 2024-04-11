@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumbnail</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" min="0" step="0.01" class="form-control" id="price" name="price" placeholder="0.00">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artists (Separate the name of each artist you wish to add with a comma and a single space. ex: Stjepan Sejic, Junji Ito, Kamome Shirahama, etc.)</label>
            <input type="text" class="form-control" id="artists" name="artists">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Writers (Separate the name of each writer you wish to add with a comma and a single space. ex: Sam Maggs, Magdalene Visaggio, Rainbow Rowell, etc. )</label>
            <input type="text" class="form-control" id="writers" name="writers">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
