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
        <h1>Footer Information</h1>

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
                            <th>action</th>
                            <th>logo white</th>
                            <th>logo black</th>
                            <th>about</th>
                            <th>address</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>facebook</th>
                            <th>twitter</th>
                            <th>linkedin</th>
                            <th>youtube</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($footers as $item)
                        <tr>
                            <td>
                                <form action="{{ route('footer.edit', $item->id) }}" method="GET" style="display:inline;">
                                    <button type="submit" class="btn btn-subtle-success waves-effect waves-light">
                                        Edit
                                    </button>
                                </form>
                            </td>
                            <td><img src="{{ asset('storage/' . $item->logo) }}" alt="Logo White" width="100"></td>
                            <td><img src="{{ asset('storage/' . $item->logodark) }}" alt="Logo Black" width="100"></td>
                            <td>{{ $item->about }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->facebook }}</td>
                            <td>{{ $item->twitter }}</td>
                            <td>{{ $item->linkedin }}</td>
                            <td>{{ $item->youtube }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection