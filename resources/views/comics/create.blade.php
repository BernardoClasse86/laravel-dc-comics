@extends('layouts.app')

@section('content')

<div class="container">
    <form>

        <div class="row" style="width: 600px; margin: 0 auto">

            <div class="row g-3 align-items-center justify-content-between">
    
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Comic Title</label>
                </div>
    
                <div class="col-auto">
                  <input type="text" class="form-control" style="width: 300px">
                </div>
    
            </div>
    
            <div class="row g-3 align-items-center justify-content-between">
    
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Comic description</label>
                </div>
    
                <div class="col-auto">
                    <textarea class="form-control" style="width: 300px"></textarea>
                </div>
                
            </div>
    
            <div class="row g-3 align-items-center justify-content-between">
    
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Comic thumb</label>
                </div>
    
                <div class="col-auto">
                  <input type="text" class="form-control" style="width: 300px">
                </div>
                
            </div>
    
            <div class="row g-3 align-items-center justify-content-between">
    
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Comic price</label>
                </div>
    
                <div class="col-auto">
                  <input type="text" class="form-control" style="width: 300px">
                </div>
                
            </div>
    
            <div class="row g-3 align-items-center justify-content-between">
    
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Comic series</label>
                </div>
    
                <div class="col-auto">
                  <input type="text" class="form-control" style="width: 300px">
                </div>
                
            </div>
    
            <div class="row g-3 align-items-center justify-content-between">
    
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Comic sale_date</label>
                </div>
    
                <div class="col-auto">
                  <input type="text" class="form-control" style="width: 300px">
                </div>
                
            </div>
    
            <div class="row g-3 align-items-center justify-content-between">
    
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Comic type</label>
                </div>
    
                <div class="col-auto">
                  <input type="text" class="form-control" style="width: 300px">
                </div>
                
            </div>

        </div>

        
    </form>
</div>
    
@endsection