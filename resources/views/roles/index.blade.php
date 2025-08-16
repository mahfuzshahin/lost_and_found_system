@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Roles</h2>
    <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Create Role</a>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Permissions</th>
        </tr>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->name }}</td>
            <td>{{ $role->permissions->pluck('name')->implode(', ') }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
