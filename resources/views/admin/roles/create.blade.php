
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Role</h2>
    <form method="POST" action="{{ route('roles.store') }}">
        @csrf
        <div class="mb-3">
            <label>Role Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Permissions</label><br>
            @foreach($permissions as $permission)
                <label>
                    <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">
                    {{ $permission->name }}
                </label><br>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection