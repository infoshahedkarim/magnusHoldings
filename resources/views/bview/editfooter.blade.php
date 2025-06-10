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
        <h1>Edit Footer Information</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="col-xl-8">
                <div class="card">
                <div class="card-body">

        <form action="{{ route('footer.update', $footers->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >Logo White</label>
                <input type="file" name="logo" accept="image/*" onchange="previewImage(event)">
                <img src="{{ asset('storage/' . $footers->logo) }}" alt="Logo White" width="100">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >New Logo White</label>
                <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100px; margin-top: 10px; display: none;">
            </div>

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >Logo Black</label>
                <input type="file" name="logodark" accept="image/*" onchange="previewImage1(event)">
                <img src="{{ asset('storage/' . $footers->logodark) }}" alt="Logo Black" width="100">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >New Logo Black</label>
                <img id="imagePreview1" src="" alt="Image Preview" style="max-width: 100px; margin-top: 10px; display: none;">
            </div>

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >About</label>
                <textarea name="about" class="form-control">{{ $footer->about }}</textarea>
            </div>

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >Address</label>
                <input type="text" class="form-control" name="address" value="{{ $footers->address }}">
            </div>

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ $footers->phone }}">
            </div>

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >Email</label>
                <input type="email" class="form-control" name="email" value="{{ $footers->email }}">
            </div>

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >Facebook</label>
                <input type="text" class="form-control" name="facebook" value="{{ $footers->facebook }}">
            </div>

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >Twitter</label>
                <input type="text" class="form-control" name="twitter" value="{{ $footers->twitter }}">
            </div>

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >LinkedIn</label>
                <input type="text" class="form-control" name="linkedin" value="{{ $footers->linkedin }}">
            </div>

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label"  for="horizontal-firstname-input" class="col-form-label" >YouTube</label>
                <input type="text" class="form-control" name="youtube" value="{{ $footers->youtube }}">
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

</script>
    
@endsection