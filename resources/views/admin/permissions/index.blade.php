@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Permissions</h2>
    <a href="{{ route('permissions.create') }}" class="btn btn-primary mb-3">Create Permission</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
    <tr>
        <th>ID</th><th>Name</th><th>Action</th>
    </tr>
    @foreach($permissions as $permission)
    <tr>
        <td>{{ $permission->id }}</td>
        <td>{{ $permission->name }}</td>
        <td>
            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-sm btn-primary">Edit</a>
            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this permission?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection
