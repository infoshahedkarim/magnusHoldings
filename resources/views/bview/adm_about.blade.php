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
        <h1>About</h1>

        @if(session('success'))
                <div class= "alert alert-success">
                  {{session('success')}}
                </div>
                @endif

                <div class="col-xl-8">
                <div class="card">
                <div class="card-body">
                <form action="{{route('about.submit')}}" method="post">
            @csrf

            <div class="row mb-4" style="align-items: center;">
            <labl for="horizontal-firstname-input" class="col-form-label">Title</lable>
            <input name="title" type="text" class="form-control" value="" placeholder="title" />
            </div>

            <div class="row mb-4">
            <lable for="horizontal-firstname-input" class="col-form-label">Description</lable>
            <div style="align-items: center;">
            <textarea name="detail" type="text" value="" class="ckeditor form-control" placeholder="Add some description"></textarea>
            </div>
            </div>

            <div class="row mb-4" style="align-items: center;">
            <lable for="horizontal-firstname-input" class="col-form-label">Quote</lable>
            <input name="quote"  type="text" value="" class="form-control" placeholder="Add a quote" />
            </div>

            <div class="row mb-4" style="align-items: center;">
            <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Save Changes</button>  
            </div>

        </form>
                </div>
                </div></div>

        
    </div>
    <script src="/ckeditor/ckeditor.js"></script>
@endsection 