@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="text-center">{{$comic->title}}</h1>
    </div>

    <div class="container mb-3">
        <div class="card mx-auto" style="width: 30rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="...">

            <div class="card-body">

                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="card-text">{{$comic->description}}</p>

            </div>

            <ul class="list-group list-group-flush">

                <li class="list-group-item">{{$comic->series}}</li>
                <li class="list-group-item">{{$comic->type}}</li>
                <li class="list-group-item">{{$comic->price}} &euro;</li>
                <li class="list-group-item">{{$comic->sale_date}}</li>
                <li class="list-group-item"><a href="{{route('comics.edit', $comic)}}" class="btn btn-primary">Edit Comic</a></li>

            </ul>
        </div>
    </div>
@endsection