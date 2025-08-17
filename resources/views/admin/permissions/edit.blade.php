@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Permission</h2>

    <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Permission Name</label>
            <input type="text" name="name" value="{{ $permission->name }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('permissions.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
