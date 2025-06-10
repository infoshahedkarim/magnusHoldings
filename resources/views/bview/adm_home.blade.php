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
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h2>Upload an Image</h2>
        <div class="col-xl-8">
                <div class="card">
                <div class="card-body">
        <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-4" style="align-items: center;">
            <label  for="horizontal-firstname-input" class="col-form-label" for="image">Banner Image</label>
            <input type="file" name="image" id="image" accept="image/*" onchange="previewImage(event)">
            <br>
            <img id="imagePreview" src="" alt="Image Preview" style="max-width: 200px; margin-top: 10px; display: none;">
        </div>
        <div class="row mb-4" style="align-items: center;">
            <label  for="horizontal-firstname-input" class="col-form-label" for="title">Title for the 1st Image</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="row mb-4" style="align-items: center;">
            <label  for="horizontal-firstname-input" class="col-form-label" for="image">Banner Image 2</label>
            <input type="file" name="image1" id="image" accept="image/*" onchange="previewImage1(event)">
            <br>
            <img id="imagePreview1" src="" alt="Image Preview" style="max-width: 200px; margin-top: 10px; display: none;">
        </div>
        <div class="row mb-4" style="align-items: center;">
            <label  for="horizontal-firstname-input" class="col-form-label" for="title1">Title for the 2nd Image</label>
            <input type="text" name="title1" id="title1" class="form-control" required>
        </div>
        <div class="row mb-4" style="align-items: center;">
            <label  for="horizontal-firstname-input" class="col-form-label" for="image">Banner Image 3</label>
            <input type="file" name="image2" id="image" accept="image/*" onchange="previewImage2(event)">
            <br>
            <img id="imagePreview2" src="" alt="Image Preview" style="max-width: 200px; margin-top: 10px; display: none;">
        </div>
         <div class="row mb-4" style="align-items: center;">
            <label  for="horizontal-firstname-input" class="col-form-label" for="title2">Title for the 3rd Image</label>
            <input type="text" name="title2" id="title2" class="form-control" required>
        </div>
        <div class="row mb-4" style="align-items: center;">
            <label  for="horizontal-firstname-input" class="col-form-label" for="Number">Number</label>
            <input type="number" name="number" id="number" class="form-control" required>
        </div>
        <div class="row mb-4" style="align-items: center;">                   
            <label  for="horizontal-firstname-input" class="col-form-label" for="Video">Video Url</label>
            <input type="text" name="url" id="url" class="form-control" required>
        </div>
        <div class="row mb-4" style="align-items: center;">
            <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Save Changes</button>  
            </div>
        </form>
                </div> </div></div>
    </div>

   <script>

     function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
            const file = input.files[0];
            const maxSize = 2 * 1024 * 1024; // 2MB in bytes

            if (file.size > maxSize) {
                alert("Image too large! Maximum size allowed is 2MB.");
                input.value = ""; // Reset the file input
                preview.src = ""; // Remove preview
                preview.style.display = "none";
                return; // Prevent FileReader from executing
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = "block";
            };
            reader.readAsDataURL(file);
        }
    }

    function previewImage1(event) {
        const input = event.target;
        const preview = document.getElementById('imagePreview1');

        if (input.files && input.files[0]) {
            const file = input.files[0];
            const maxSize = 2 * 1024 * 1024; // 2MB in bytes

            if (file.size > maxSize) {
                alert("Image too large! Maximum size allowed is 2MB.");
                input.value = ""; // Reset the file input
                preview.src = ""; // Remove preview
                preview.style.display = "none";
                return; // Prevent FileReader from executing
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = "block";
            };
            reader.readAsDataURL(file);
        }
    }

    function previewImage2(event) {
        const input = event.target;
        const preview = document.getElementById('imagePreview2');

        if (input.files && input.files[0]) {
            const file = input.files[0];
            const maxSize = 2 * 1024 * 1024; // 2MB in bytes

            if (file.size > maxSize) {
                alert("Image too large! Maximum size allowed is 2MB.");
                input.value = ""; // Reset the file input
                preview.src = ""; // Remove preview
                preview.style.display = "none";
                return; // Prevent FileReader from executing
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = "block";
            };
            reader.readAsDataURL(file);
        }
    }

   </script>

@endsection