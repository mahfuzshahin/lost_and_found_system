@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Lost Item</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('lost.item.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Item Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter item name">
        </div>

        <div class="mb-3">
            <label class="form-label">Room Number <span class="text-danger">*</span></label>
            <input type="text" name="room_number" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Lost Date <span class="text-danger">*</span></label>
            <input type="date" name="lost_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="">Select Status</option>
                <option value="pending">Pending</option>
                <option value="returned">Returned</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Picture</label>
            <input type="file" name="picture" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Save Item</button>
        <a href="{{ route('lost.item') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection