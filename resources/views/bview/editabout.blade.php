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
        <h1>Edit About</h1>
        <div class="col-xl-8">
                <div class="card">
                <div class="card-body">
        <form action="{{ route('about.update', $updates->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $updates->title }}" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="details">Details</label>
                <textarea name="detail" id="detail" class="ckeditor form-control" required>{{ $updates->detail }}</textarea>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="quote">Quote</label>
                <input type="text" name="quote" id="quote" class="form-control" value="{{ $updates->quote }}" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
            <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Update Changes</button>  
            </div>
        </form>
                </div></div></div>
        <a href="{{ route('about.all') }}">Back to Show About</a>  
    </div>
    
     <script src="/ckeditor/ckeditor.js"></script>
    
@endsection