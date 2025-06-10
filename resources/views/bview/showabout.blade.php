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
        <h1>Show About</h1>
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
                            <th>Title</th>
                            <th>Details</th>
                            <th>Quote</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($updates as $update)
                        <tr>
                            <td>
                                <form action="{{ route('about.edit', $update->id) }}" method="GET" style="display:inline;">
                                    <button type="submit" class="btn btn-subtle-success waves-effect waves-light">
                                        Edit
                                    </button>
                                </form>
                            </td>
                            <td scope="row">{{ $update->title }}</td>
                            <td>{{ $update->detail }}</td>
                            <td>{{ $update->quote }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection