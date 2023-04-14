@extends('layouts.app')

@section('content')

<div class="container">

    <table class="table table-dark table-striped">

        <thead>
            <tr class="text-center">
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Comic Thumb</th>
              <th scope="col">Price</th>
              <th scope="col">Series</th>
              <th scope="col">Release Date</th>
              <th scope="col">Comic Type</th>
            </tr>
          </thead>

        <tbody>

            @foreach ($comics as $comic)

                <tr class="text-center">
                    <td><a href="{{route('comics.show', $comic->id)}}">{{ $comic->title }}</a></td>
                    <td class="col-3"><a href="{{route('comics.show', $comic->id)}}">{{ $comic->description }}</a></td>
                    <td><a href="{{route('comics.show', $comic->id)}}"><img style="width: 70px" src="{{ $comic->thumb }}" alt=""></a></td>
                    <td><a href="{{route('comics.show', $comic->id)}}">{{ $comic->price }} &euro;</a></td>
                    <td><a href="{{route('comics.show', $comic->id)}}">{{ $comic->series }}</a></td>
                    <td><a href="{{route('comics.show', $comic->id)}}">{{ $comic->sale_date }}</a></td>
                    <td><a href="{{route('comics.show', $comic->id)}}">{{ $comic->type }}</a></td>
                </tr>

            @endforeach

        </tbody>

    </table>

</div>
    
@endsection