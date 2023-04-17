@extends('layouts.app')

@section('content')

<div class="container">

    <div class="container">
        <h1>New Comic</h1>
    </div>

    <div class="container">

        <form action="{{route('comics.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="col-form-label">Comic Title</label>       
                <input type="text" class="form-control" id="title" name="title">
            </div>
    
            <div class="mb-3">
                <label for="description" class="col-form-label">Comic description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="col-form-label">Comic thumb (URL)</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
    
            <div class="mb-3">
                <label for="price" class="col-form-label">Comic price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
    
            <div class="mb-3">    
                <label for="series" class="col-form-label">Comic series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
    
            <div class="mb-3">    
                <label for="sale-date" class="col-form-label">Comic Sale Date</label>
                <input type="text" class="form-control" id="sale-date" name="sale_date">
            </div>
    
            <div class="mb-3 mb-3">    
                <label for="comic-type" class="col-form-label">Comic type</label>
                <input type="text" class="form-control" id="comic-type" name="type">
            </div>

            <button type="submit" class="btn btn-primary">Save new comic</button>

        </form>

    </div>

</div>
    
@endsection