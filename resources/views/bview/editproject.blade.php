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
        <h1>Edit Project</h1>
        <div class="col-xl-8">
                <div class="card">
                <div class="card-body">
        <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="title">Title</label><br>
            <input type="text" id="title" name="title" value="{{ $project->title }}"><br><br>

            <label for="slug">Slug</label><br>
            <input type="text" id="slug" name="slug" value="{{ $project->slug }}"><br><br>

            <label for="place">Place</label><br>
            <input type="text" id="place" name="place" value="{{ $project->place }}"><br><br>

            <label for="price">Price</label><br>
            <input type="text" id="price" name="price" value="{{ $project->price }}"><br><br>

            <label for="address">Address</label><br>
            <input type="text" id="address" name="address" value="{{ $project->address }}"><br><br>

            <label for="squareft">Square Feet</label><br>
            <input type="text" id="squareft" name="squareft" value="{{ $project->squareft }}"><br><br>

            <label for="image1">Image 1</label><br>
            <img src ="{{ asset('storage/'.$project->image1) }}" alt="Image 1" width="100"><br><br>
            <input type="file" id="image1" name="image1"  onchange="previewImage(event)"><br><br>
            <label for="image1">New Image 1</label><br>
            <img id="imagePreview" src="" alt="Image Preview" style="max-width: 80px; margin-top: 10px; display: none;">

            <label for="image2">Image 2</label><br>
            <img src ="{{ asset('storage/'.$project->image2) }}" alt="Image 2" width="100"><br><br>
            <input type="file" id="image2" name="image2"  onchange="previewImage1(event)"><br><br>
            <label for="image1">New Image 2</label><br>
            <img id="imagePreview1" src="" alt="Image Preview" style="max-width: 80px; margin-top: 10px; display: none;">

            <label for="floorplan">Floorplan</label><br>
            <img src ="{{ asset('storage/'.$project->floorplan) }}" alt="Floorplan" width="100"><br><br>
            <input type="file" id="floorplan" name="floorplan"  onchange="previewImage2(event)"><br><br>
            <label for="image1">New Image 3</label><br>
            <img id="imagePreview2" src="" alt="Image Preview" style="max-width: 80px; margin-top: 10px; display: none;">

            <label for="detail">Detail</label><br>
            <textarea id="detail" name="detail" class="ckeditor">{{ $project->detail }}</textarea><br><br>

            <label for="map">Map</label><br>
            <textarea id="map" name="map">{{ $project->map }}</textarea><br><br>

            <div class="row mb-4" style="align-items: center;">
            <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Save Changes</button>  
            </div>
        </form>
    </div></div></div>
    </div>
    <script src="/ckeditor/ckeditor.js"></script>
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