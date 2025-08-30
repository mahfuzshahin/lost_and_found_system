@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lost Items</h2>
    <a href="{{ route('lost.item.create') }}" class="btn btn-primary mb-3">Add Lost Item</a>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Room Number</th>
            <th>Date</th>
            <th>Picture</th>
            <th>Submitted By</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->room_number }}</td>
            <td>{{ $item->lost_date }}</td>
            <td>
                @if($item->picture)
                <img src="{{ asset('storage/'.$item->picture) }}" width="60" height="60" alt="item">
                @else
                <span>No Image</span>
                @endif
            </td>
            <td>{{ $item->user->name ?? '' }}</td>
            <td>{{ $item->status ?? '' }}</td>
            <td>
                <a href="{{ route('lost.item.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>

            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection