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
        <h1>Show Contact</h1>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Edit</th>
                            <th>Phone 1</th>
                            <th>Phone 2</th>
                            <th>Email 1</th>
                            <th>Email 2</th>
                            <th>Address</th>
                            <th>Map</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($updates as $update)
                        <tr>
                            <td>
                                <form action="{{ route('contact.edit', $update->id) }}" method="GET" style="display:inline;">
                                    <button type="submit" class="btn btn-subtle-success waves-effect waves-light">
                                        Edit
                                    </button>
                                </form>
                            </td>
                            <td>{{ $update->phone1 }}</td>
                            <td>{{ $update->phone2 }}</td>
                            <td>{{ $update->email1 }}</td>
                            <td>{{ $update->email2 }}</td>
                            <td>{{ $update->address }}</td>
                            <td>{{ $update->map }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection