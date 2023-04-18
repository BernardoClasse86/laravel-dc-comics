@extends('layouts.app')

@section('content')

<div class="container">

    <table class="table table-dark table-striped">

        <thead>
            <tr class="text-center">
              <th scope="col">Title</th>
              {{-- <th scope="col">Description</th> --}}
              <th scope="col">Comic Thumb</th>
              <th scope="col">Price</th>
              <th scope="col">Series</th>
              <th scope="col">Release Date</th>
              {{-- <th scope="col">Comic Type</th> --}}
              <th scope="col">Comic Link</th>
              <th scope="col">Edit or Delete Comic</th>
            </tr>
          </thead>

        <tbody>

            @foreach ($comics as $comic)

                <tr class="text-center">
                    <td>{{ $comic->title }}</td>
                    {{-- <td class="col-3">{{ $comic->description }}</td> --}}
                    <td><img style="width: 70px" src="{{ $comic->thumb }}" alt=""></td>
                    <td>{{ $comic->price }} &euro;</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    {{-- <td>{{ $comic->type }}</td> --}}
                    <td><a class="btn btn-info" href="{{route('comics.show', $comic->id)}}">Comic Link</a></td>
                    <td>
                        <div class="d-flex gap-3 justify-content-center">
                            <a class="btn btn-primary" href="{{route('comics.edit', $comic)}}">Edit</a>
                            <form action="{{route('comics.destroy', $comic)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="X">
                            </form>
                        </div>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

</div>
    
@endsection