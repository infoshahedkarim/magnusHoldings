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
        <h1>All Project List</h1>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>title</th>
                            <th>slug</th>
                            <th>place</th>
                            <th>price</th>
                            <th>address</th>
                            <th>squareft</th>
                            <th>image1</th>
                            <th>image2</th>
                            <th>floorplan</th>
                            <th>detail</th>
                            <th>map</th>
                        </tr>
                    </thead>
                    @foreach($projects as $project)
                    <tr>
                        <td>
                            <form action="{{ route('project.edit', $project->id) }}" method="GET" style="display:inline;">
                                <button type="submit" class="btn btn-subtle-success waves-effect waves-light">
                                    Edit
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('project.delete', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-subtle-danger  waves-effect waves-light">Delete</button>
                            </form>
                        </td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->place }}</td>
                        <td>{{ $project->price }}</td>
                        <td>{{ $project->address }}</td>
                        <td>{{ $project->squareft }}</td>
                        <td><img src="{{ asset('storage/'.$project->image1) }}" alt="Image 1" width="100"></td>
                        <td><img src="{{ asset('storage/'.$project->image2) }}" alt="Image 2" width="100"></td>
                        <td><img src="{{ asset('storage/'.$project->floorplan) }}" alt="Floorplan" width="100"></td>
                        <td>{{ $project->detail }}</td>
                        <td>{{$project->map}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @endsection