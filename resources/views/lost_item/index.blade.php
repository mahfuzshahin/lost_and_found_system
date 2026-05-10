@extends('layouts.app')

@section('content')
<div class="w-full">

    <!-- Page Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Lost Items</h2>
            <p class="text-sm text-slate-500 mt-1">Manage all reported lost items</p>
        </div>

        <a href="{{ route('lost.item.create') }}"
           class="px-5 py-2 bg-primary text-white rounded-lg hover:bg-primaryHover transition font-medium">
            + Add Lost Item
        </a>
    </div>

    <!-- Table Card -->
    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm overflow-hidden">

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-slate-50 text-slate-600 text-left">
                    <tr>
                        <th class="px-6 py-3 font-medium">Name</th>
                        <th class="px-6 py-3 font-medium">Room</th>
                        <th class="px-6 py-3 font-medium">Date</th>
                        <th class="px-6 py-3 font-medium">Picture</th>
                        <th class="px-6 py-3 font-medium">Submitted By</th>
                        <th class="px-6 py-3 font-medium">Status</th>
                        <th class="px-6 py-3 font-medium">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">
                    @foreach($items as $item)
                    <tr class="hover:bg-slate-50 transition">

                        <td class="px-6 py-3 text-slate-700">
                            {{ $item->name }}
                        </td>

                        <td class="px-6 py-3 text-slate-600">
                            {{ $item->room_number }}
                        </td>

                        <td class="px-6 py-3 text-slate-600">
                            {{ $item->lost_date }}
                        </td>

                        <td class="px-6 py-3">
                            @if($item->picture)
                                <img src="{{ asset('storage/'.$item->picture) }}"
                                     class="h-12 w-12 rounded-lg object-cover border">
                            @else
                                <span class="text-xs text-slate-400">No Image</span>
                            @endif
                        </td>

                        <td class="px-6 py-3 text-slate-600">
                            {{ $item->user->name ?? '-' }}
                        </td>

                        <td class="px-6 py-3">
                            <span class="px-3 py-1 text-xs rounded-full bg-slate-100 text-slate-700">
                                {{ $item->status ?? 'pending' }}
                            </span>
                        </td>

                        <td class="px-6 py-3">
                            <a href="{{ route('lost.item.edit', $item->id) }}"
                               class="px-3 py-1 text-xs rounded-lg bg-indigo-100 text-indigo-700 hover:bg-indigo-200 transition">
                                Edit
                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection