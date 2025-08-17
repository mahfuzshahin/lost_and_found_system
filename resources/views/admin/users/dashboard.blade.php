@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">User Dashboard</h1>

    <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title"><i class="fa fa-home"></i> Welcome, {{ auth()->user()->name }}</h5>
            <p class="card-text">This is your dashboard. You can see the resources allowed by your role.</p>
        </div>
    </div>
</div>
@endsection
