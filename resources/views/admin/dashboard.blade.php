@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Admin Dashboard</h1>
    
    <div class="row g-4">
        <!-- Users Management -->
        <div class="col-md-4">
            <div class="card text-white bg-primary h-100">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-users"></i> Users</h5>
                    <p class="card-text">Manage all users: create, edit, assign roles.</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-light btn-sm">Go</a>
                </div>
            </div>
        </div>

        <!-- Roles Management -->
        <div class="col-md-4">
            <div class="card text-white bg-success h-100">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-user-shield"></i> Roles</h5>
                    <p class="card-text">Create, edit, and assign permissions to roles.</p>
                    <a href="{{ route('admin.roles.index') }}" class="btn btn-light btn-sm">Go</a>
                </div>
            </div>
        </div>

        <!-- Permissions Management -->
        <div class="col-md-4">
            <div class="card text-white bg-warning h-100">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-key"></i> Permissions</h5>
                    <p class="card-text">Manage all permissions and assign to roles.</p>
                    <a href="{{ route('admin.permissions.index') }}" class="btn btn-light btn-sm">Go</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
