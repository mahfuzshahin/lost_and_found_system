@extends('layouts.app')

@section('content')
<div class="container">
<h2>Edit Role</h2>
<form method="POST" action="{{ route('roles.update', $role->id) }}">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $role->name }}" required>
    </div>

    <div class="mb-3">
        <label>Permissions</label><br>
        @foreach($permissions as $permission)
            <label>
                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                       {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}>
                {{ $permission->name }}
            </label><br>
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection