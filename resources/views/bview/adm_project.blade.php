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
        <h1>Create Projects</h1>

        @if(session('success'))
                <div class= "alert alert-success">
                  {{session('success')}}
                </div>
                @endif

                <div class="col-xl-8">
                <div class="card">
                <div class="card-body">

        <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
         
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label" >Title</label>
                <input id="title" name="title" type="text" class="form-control" placeholder="Add title" onkeyup="generateSlug()" required />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label" >Meta Tag</label>
                <input id="slug" name="slug" type="text" class="form-control" placeholder="Add meta tag" readonly/>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label" >Location: Thana</label>
                <input id="place" name="place" type="text" class="form-control" placeholder="Add thana" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label" >Price</label>
                <input id="price" name="price" type="number" class="form-control" placeholder="Add thana" />
            </div>
            <div class="row mb-4" style="align-items: center;"> 
                <label  for="horizontal-firstname-input" class="col-form-label" >Address</label>
                <input id="address" name="address" type="text" class="form-control" placeholder="Add an address" />
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label" >Property Sq/ft</label>
                <input id="squareft" name="squareft" type="text" class="form-control" placeholder="Add square feet" />
            </div>

            <div class="row mb-4" style="align-items: center;">
            <label  for="horizontal-firstname-input" class="col-form-label" for="image">Project Image</label>
            <input type="file" name="image1" id="image" accept="image/*" onchange="previewImage(event)">
            <br>
            <img id="imagePreview" src="" alt="Image Preview" style="max-width: 200px; margin-top: 10px; display: none;">
        </div>
            <div class="row mb-4" style="align-items: center;">
            <label  for="horizontal-firstname-input" class="col-form-label" for="image">Project Alternative Image</label>
            <input type="file" name="image2" id="image1" accept="image/*" onchange="previewImage1(event)">
            <br>
            <img id="imagePreview1" src="" alt="Image Preview1" style="max-width: 200px; margin-top: 10px; display: none;">
        </div>
            <div class="row mb-4" style="align-items: center;">
            <label  for="horizontal-firstname-input" class="col-form-label" for="image">Floor Plan</label>
            <input type="file" name="floorplan" id="floorplan" accept="image/*" onchange="previewImage2(event)">
            <br>
            <img id="imagePreview2" src="" alt="Image Preview2" style="max-width: 200px; margin-top: 10px; display: none;">
        </div>

            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label" >Add Details</label>
                <textarea id="detail" name="detail" type="text" class="ckeditor form-control" placeholder="Add a details"></textarea>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label  for="horizontal-firstname-input" class="col-form-label" >Add Map</label>
                <input id="map" name="map" type="text" class="form-control" placeholder="Add map code" />
            </div>

            <div class="row mb-4" style="align-items: center;">
            <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Save Changes</button>  
            </div>


        </form>
</div></div></div>


    </div>
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
    let debounceTimer;

    function generateSlug() {
        const name = document.getElementById("title").value;
        let baseSlug = name.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^[-]+|[-]+$/g, '');

        clearTimeout(debounceTimer);

        if (baseSlug.length > 0) {
            debounceTimer = setTimeout(function () {
                checkSlug(baseSlug).then(finalSlug => {
                    document.getElementById("slug").value = finalSlug;
                });
            }, 500);
        } else {
            document.getElementById("slug").value = '';
        }
    }

    async function checkSlug(baseSlug) {
        let slug = baseSlug;
        let count = 0;
        let exists = true;

        while (exists) {
            const response = await fetch(`/check-slug/${slug}`);
            const data = await response.json();

            exists = data.exists;

            if (exists) {
                count++;
                slug = `${baseSlug}-${count}`;
            }
        }

        if (slug !== baseSlug) {
            alert("Slug already exists. New unique slug generated.");
        }

        return slug;
    }
</script>


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