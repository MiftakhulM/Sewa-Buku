@extends('layout.mainlayout')

@section('title', 'Category')
    
@section('content')
    <h1 class="mb-1">Category List</h1>

    <div class="my-3 d-flex justify-content-end">
        <a href="category-deleted" class="btn btn-danger me-3">View Deleted Data</a>
        <a href="category-add" class="btn btn-primary">Add Data</a>
    </div>

    <div class="mt-5">
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
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="category-edit/{{ $item->slug }}" class="btn btn-warning btn-sm me-3">edit</a>
                            <a href="category-delete/{{ $item->slug }}" class="btn btn-danger btn-sm">delete</a>
                        </td>                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection