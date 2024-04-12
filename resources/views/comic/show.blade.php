@extends('layouts/app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between my-3">
        <a href="{{route('comics.index')}}" class="btn btn-outline-primary m-3">Back</a>

        <div class="d-flex gap-3 align-items-center">
            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-outline-info">Edit</a>
            <button class="btn btn-outline-danger">Delete</button>
        </div>
    </div>
    <div class="d-flex gap-5">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}" style="max-width: 500px; object-fit: cover;" >
        <div>
            <h2>{{$comic->title}}</h2>
            <div class="d-flex gap-5 w-100 justify-content-between">
                <h3 class="text-body-secondary">{{$comic->series}}</h3>
                <h3 class="text-body-secondary">{{$comic->price}}</h3>
                <h3 class="text-body-secondary">{{$comic->sale_date}}</h3>
            </div>
            <p>{{$comic->description}}</p>
            <div class="d-flex gap-5">
                <div>
                    <h4>Arists</h4>
                    <ul>
                        @php
                        foreach(json_decode($comic->artists) as $artist){
                            echo '<li>' . $artist . '</li>';
                        }     
                        @endphp
                    </ul>

                </div>

                <div>
                    <h4>Writers</h4>
                    <ul>
                        @php
                        foreach(json_decode($comic->writers) as $writer){
                            echo '<li>' . $writer . '</li>';
                        }     
                        @endphp
                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection