@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit User</h2>
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label>Password (leave blank to keep current)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <div class="mb-3">
            <label>Roles</label><br>
            @foreach($roles as $role)
                <label>
                    <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                        {{ in_array($role->id, $userRoles) ? 'checked' : '' }}>
                    {{ $role->name }}
                </label><br>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection