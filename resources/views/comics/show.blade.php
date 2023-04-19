@extends('layouts.app')

@section('content')

    <div class="container mb-4">
        <h1 class="text-center">{{$comic->title}}</h1>
    </div>

    <div class="container mb-3">
        <div class="card mx-auto" style="width: 30rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="...">

            <div class="card-body">

                <h5 class="card-title text-center mb-2">{{$comic->title}}</h5>
                <p class="card-text">{{$comic->description}}</p>

            </div>

            <ul class="list-group list-group-flush">

                <li class="list-group-item"><strong>Series: </strong>{{$comic->series}}</li>
                <li class="list-group-item"><strong>Type: </strong>{{$comic->type}}</li>
                <li class="list-group-item"><strong>Price: </strong>{{$comic->price}} &euro;</li>
                <li class="list-group-item"><strong>Sale Date: </strong>{{$comic->sale_date}}</li>
                <li class="list-group-item"><a href="{{route('comics.edit', $comic)}}" class="btn btn-warning">Edit Comic</a></li>

            </ul>
        </div>
    </div>
@endsection