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
        <h1>Show Home Details</h1>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <tr>

                        <th>Edit</th>
                        <th>image</th>
                        <th>Title</th>
                        <th>image1</th>
                        <th>Title1</th>
                        <th>image2</th>
                        <th>Title2</th>
                        <th>number</th>
                        <th>url</th>
                    </tr>
                    @foreach($home as $h)
                    <tr>
                        <td>
                            <form action="{{ route('home.edit', $h->id) }}" method="GET" style="display:inline;">
                                <button type="submit" class="btn btn-subtle-success waves-effect waves-light">
                                    Edit
                                </button>
                            </form>
                        </td>
                        <td><img src="{{ asset('storage/'.$h->image) }}" alt="Image" width="100" height="100"></td>
                        <td>{{ $h->title }}</td>
                        <td><img src="{{ asset('storage/'.$h->image1) }}" alt="Image1" width="100" height="100"></td>
                        <td>{{ $h->title1 }}</td>
                        <td><img src="{{ asset('storage/'.$h->image2) }}" alt="Image2" width="100" height="100"></td>
                        <td>{{ $h->title2 }}</td>
                        <td>{{ $h->number }}</td>
                        <td>{{ $h->url }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @endsection