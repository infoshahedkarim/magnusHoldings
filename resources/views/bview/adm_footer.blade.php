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
        <h2>Add Footer</h2>
        <div class="col-xl-8">
                <div class="card">
                <div class="card-body">
        <form action="{{ route('footer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-4" style="align-items: center;">
            <label for="horizontal-firstname-input" class="col-form-label" for="logo">Add Bright Logo</label>
            <input type="file" name="logo" id="image" accept="image/*" onchange="previewImage(event)">
            <br>
            <img id="imagePreview" src="" alt="Image Preview" style="max-width: 200px; margin-top: 10px; display: none;">
        </div>
       
        <div class="row mb-4" style="align-items: center;">
            <label for="horizontal-firstname-input" class="col-form-label" for="logodark">Add Dark Logo</label>
            <input type="file" name="logodark" id="image" accept="image/*" onchange="previewImage1(event)">
            <br>
            <img id="imagePreview1" src="" alt="Image Preview" style="max-width: 200px; margin-top: 10px; display: none;">
        </div>
        <div class="row mb-4" style="align-items: center;">
            <label for="horizontal-firstname-input" class="col-form-label" for="about">About</label>
            <input type="text" name="about" id="about" class="form-control" required>
        </div>
        <div class="row mb-4" style="align-items: center;">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>          
        <div class="row mb-4" style="align-items: center;">
            <label for="horizontal-firstname-input" class="col-form-label" for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="row mb-4" style="align-items: center;">
            <label for="horizontal-firstname-input" class="col-form-label" for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>       
        </div>

        <div class="row mb-4" style="align-items: center;">
            <label for="horizontal-firstname-input" class="col-form-label" for="facebook">Facebook URL</label>
            <input type="text" name="facebook" id="facebook" class="form-control" required>
        </div>
        <div class="row mb-4" style="align-items: center;">
            <label for="horizontal-firstname-input" class="col-form-label" for="twitter">Twitter URL</label>    
            <input type="text" name="twitter" id="twitter" class="form-control" required>
        </div>
        <div class="row mb-4" style="align-items: center;">
            <label for="horizontal-firstname-input" class="col-form-label" for="youtube">Youtube URL</label>
            <input type="text" name="youtube" id="youtube" class="form-control" required>
        </div>
        <div class="row mb-4" style="align-items: center;">
            <label for="horizontal-firstname-input" class="col-form-label" for="linkedin">LinkedIn URL</label>
            <input type="text" name="linkedin" id="linkedin" class="form-control" required> 
        </div>
        <div class="row mb-4" style="align-items: center;">
            <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Save Changes</button>  
            </div>
        </form>
                </div>
            </div>
        </div>
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

   </script>

@endsection 