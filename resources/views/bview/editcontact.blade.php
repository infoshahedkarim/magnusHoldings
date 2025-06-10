@extends('layouts.master')
@section('title')
    Invoice Detail
@endsection
@section('page-title')
    Invoice Detail
@endsection
@section('body')

    <body>
    @endsection
    @section('content')

    <div>
        <h1>Edit Contact</h1>
        <div class="col-xl-8">
                <div class="card">
                <div class="card-body">
        <form action="{{ route('contact.update', $updates->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="phone1">Phone 1</label>
                <input type="text" id="phone1" name="phone1" class="form-control" value="{{ $updates->phone1 }}" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="phone2">Phone 2</label>
                <input type="text" id="phone2" name="phone2" value="{{ $updates->phone2 }}" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="email1">Email 1</label>
                <input type="email" id="email1" name="email1" class="form-control" value="{{ $updates->email1 }}" required>
            </div>  
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="email2">Email 2</label>
                <input type="email" id="email2" name="email2" class="form-control" value="{{ $updates->email2 }}" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ $updates->address }}" required>        
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="map">Map:</label>
                <textarea id="map" name="map" class="form-control" required>{{ $updates->map }}</textarea>
            </div>
            
            <div class="row mb-4" style="align-items: center;">
            <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Update Changes</button>  
            </div>
        </form>
    </div></div></div>

    </div>
    
@endsection