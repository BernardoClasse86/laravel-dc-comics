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
              <th scope="col">Comic Link</th>
            </tr>
          </thead>

        <tbody>

            @foreach ($comics as $comic)

                <tr class="text-center">
                    <td>{{ $comic->title }}</td>
                    <td class="col-3">{{ $comic->description }}</td>
                    <td><img style="width: 70px" src="{{ $comic->thumb }}" alt=""></td>
                    <td>{{ $comic->price }} &euro;</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td><a href="{{route('comics.show', $comic->id)}}">Comic Link</a></td>
                </tr>

            @endforeach

        </tbody>

    </table>

</div>
    
@endsection