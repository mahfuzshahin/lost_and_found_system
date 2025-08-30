@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Lost Item</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('lost.item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Item Name</label>
            <input type="text" name="name" class="form-control" value="{{ $item->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Room Number <span class="text-danger">*</span></label>
            <input type="text" name="room_number" class="form-control" value="{{ $item->room_number }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Lost Date <span class="text-danger">*</span></label>
            <input type="date" name="lost_date" class="form-control" value="{{ $item->lost_date }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="">Select Status</option>
                <option value="pending" {{ $item->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="returned" {{ $item->status == 'returned' ? 'selected' : '' }}>Returned</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Picture</label><br>
            @if($item->picture)
            <img src="{{ asset('storage/'.$item->picture) }}" width="60" height="60" class="mb-2"><br>
            @endif
            <input type="file" name="picture" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Item</button>
        <a href="{{ route('lost.item') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection