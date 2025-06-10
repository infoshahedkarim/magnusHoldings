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
        <h1>home</h1>
        <div class="col-xl-8">
                <div class="card">
                <div class="card-body">
       <form method = "post" action="{{ route('home.update', $home->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" >image</label>
                <img src="{{ asset('storage/'.$home->image) }}" alt="Image" width="100" height="100">
                <input name="image" type="file" value="{{ $home->image }}" onchange="previewImage(event)"/>
                <label for="horizontal-firstname-input" class="col-form-label" >New image</label>
                <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100px; margin-top: 10px; display: none;">
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" >Title</label>
                <input name="title" type="text" class="form-control" value="{{ $home->title }}" placeholder="title" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" >image1</label>
                <img src="{{ asset('storage/'.$home->image1) }}" alt="Image1" width="100" height="100">
                <input name="image1" type="file" value="{{ $home->image1 }}" onchange="previewImage1(event)"/>
                <label for="horizontal-firstname-input" class="col-form-label" >New image1</label>
                <img id="imagePreview1" src="" alt="Image Preview" style="max-width: 200px; margin-top: 10px; display: none;">
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label" >Title1</label>
                <input name="title1" type="text" class="form-control" value="{{ $home->title1 }}" placeholder="title1" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" >image2</label>
                <img src="{{ asset('storage/'.$home->image2) }}" alt="Image2" width="100" height="100">
                <input name="image2" type="file" value="{{ $home->image2 }}" onchange="previewImage2(event)"/>
                <label  for="horizontal-firstname-input" class="col-form-label" >New image2</label>
                <img id="imagePreview2" src="" alt="Image Preview" style="max-width: 200px; margin-top: 10px; display: none;">
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" >Title2</label>
                <input name="title2" class="form-control" type="text" value="{{ $home->title2 }}" placeholder="title2" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" >number</label>
                <input name="number" type="text" class="form-control" value="{{ $home->number }}" placeholder="number" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" >url</label>
                <input name="url" type="text" class="form-control" value="{{ $home->url }}" placeholder="url" />
            </div>

            <div class="row mb-4" style="align-items: center;">
            <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Update Changes</button>  
            </div>

        </form>
    </div></div></div>
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