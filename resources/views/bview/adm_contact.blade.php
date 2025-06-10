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
        <h1>Contact US</h1>

        @if(session('success'))
                <div class= "alert alert-success">
                  {{session('success')}}
                </div>
                @endif

                <div class="col-xl-8">
                <div class="card">
                <div class="card-body">

        <form action="{{route('contact.create')}}" method="POST">
            @csrf
            @method('post')

            <div class="row mb-4" style="align-items: center;">
                <lable for="horizontal-firstname-input" class="col-form-label">Add Phone No</lable>
                <input id="phone" name="phone1" class="form-control" type="text" placeholder="Add a phone number" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <lable for="horizontal-firstname-input" class="col-form-label">Add alternative Phone No</lable>
                <input id="phone" name="phone2" type="text" class="form-control" placeholder="Add an alternative phone number" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <lable for="horizontal-firstname-input" class="col-form-label">Add an Email</lable>
                <input id="phone" name="email1" type="text" class="form-control" placeholder="Add an email" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <lable for="horizontal-firstname-input" class="col-form-label">Add an alternative Email</lable>
                <input id="phone" name="email2" type="text" class="form-control" placeholder="Add an alternative email" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <lable for="horizontal-firstname-input" class="col-form-label">Add an Address</lable>
                <input id="phone" name="address" type="text" class="form-control" placeholder="Add a address" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <lable for="horizontal-firstname-input" class="col-form-label">Add map</lable>
                <input id="phone" name="map" type="text" class="form-control" placeholder="Add a address" />
            </div>

            <div class="row mb-4" style="align-items: center;">
            <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Save Changes</button>  
            </div>




        </form>
                </div>
                </div></div>


    </div>

@endsection