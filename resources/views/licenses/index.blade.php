@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Licenses</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('licenses.create') }}" class="btn btn-primary mb-3">Generate License</a>
    <a href="{{ route('licenses.export') }}" class="btn btn-success mb-3">Export to CSV</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>License Key</th>
                <th>Used</th>
                <th>Domain</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($licenses as $license)
            <tr>
                <td>{{ $license->id }}</td>
                <td>{{ $license->license_key }}</td>
                <td>{{ $license->used ? 'Yes' : 'No' }}</td>
                <td>{{ $license->domain ?? '-' }}</td>
                <td>{{ $license->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
