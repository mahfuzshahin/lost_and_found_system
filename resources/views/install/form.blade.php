@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Interactive Installation</h2>
    <form method="POST" action="{{ route('install.run') }}">
        @csrf

        <div class="form-group">
            <label>Company Name</label>
            <input type="text" name="company_name" class="form-control" required>
        </div>

        <div class="form-group mt-2">
            <label>Admin Name</label>
            <input type="text" name="admin_name" class="form-control" required>
        </div>

        <div class="form-group mt-2">
            <label>Admin Email</label>
            <input type="email" name="admin_email" class="form-control" required>
        </div>

        <div class="form-group mt-2">
            <label>Admin Password</label>
            <input type="password" name="admin_password" class="form-control" required>
        </div>

        <button class="btn btn-primary mt-3">Install</button>
    </form>
</div>
@endsection
