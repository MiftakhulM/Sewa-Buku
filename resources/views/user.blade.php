@extends('layout.mainlayout')

@section('title', 'Users')
    
@section('content')
    <h1>User List</h1>

    <div class="my-3 d-flex justify-content-end">
        <a href="/user-banned" class="btn btn-danger me-3">View Banned User</a>
        <a href="/registered-users" class="btn btn-primary">New Registered User</a>
    </div>

    <div class="mt-2">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="my-5">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->username }}</td>
                    <td>
                            @if ($item->phone)
                                {{ $item->phone }}
                            @else
                                -
                            @endif
                    </td>
                    <td>
                        <a href="/user-detail/{{ $item->slug }}" class="btn btn-info btn-sm me-3">detail</a>
                        <a href="/user-ban/{{ $item->slug }}" class="btn btn-danger btn-sm">ban user</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection