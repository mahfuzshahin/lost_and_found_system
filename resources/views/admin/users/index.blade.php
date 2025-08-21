@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Users</h2>
    
    @can('admin')
    <a href="{{ route('users.create') }}" class="btn btn-success mb-3">Create User</a>
    @endcan
    <table class="table table-bordered">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
        <td>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection