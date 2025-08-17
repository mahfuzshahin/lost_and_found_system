@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create User</h2>
    <form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Roles</label><br>
        @foreach($roles as $role)
            <label>
                <input type="checkbox" name="roles[]" value="{{ $role->id }}">
                {{ $role->name }}
            </label><br>
        @endforeach
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>
</div>
@endsection