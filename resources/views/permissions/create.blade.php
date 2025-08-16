@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Permission</h2>

    <form action="{{ route('permissions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Permission Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('permissions.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
