@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Roles</h2>
    <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Create Role</a>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Permissions</th>
            <th>Action</th>
        </tr>
        @foreach($roles as $role)
    <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td>{{ $role->permissions->pluck('name')->implode(', ') }}</td>
        <td>
            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-primary">Edit</a>
            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this role?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table>
</div>
@endsection