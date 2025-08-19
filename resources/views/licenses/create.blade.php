@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Generate Licenses</h2>

    <form method="POST" action="{{ route('licenses.store') }}">
        @csrf

        <div class="form-group">
            <label>Number of Licenses to Generate</label>
            <input type="number" name="count" class="form-control" min="1" max="1000" value="1" required>
        </div>

        <button class="btn btn-primary mt-3">Generate</button>
    </form>
</div>
@endsection
