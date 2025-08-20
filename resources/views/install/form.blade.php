@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Interactive Installation</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('install.run') }}">
        @csrf

        <!-- <div class="form-group mt-2">
            <label>License Key</label>
            <input type="text" name="license_key" class="form-control" placeholder="Enter your license key" required>
        </div> -->

        <div class="form-group mt-2">
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

        <button class="btn btn-primary mt-3 w-100">Install</button>
    </form>
</div>
@endsection
