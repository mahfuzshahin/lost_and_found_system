@extends('layouts.app')

@section('content')
<div class="w-full">

    <!-- Page Header -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Permissions</h2>
            <p class="text-sm text-slate-500 mt-1">Manage system permissions</p>
        </div>

        <a href="{{ route('permissions.create') }}"
           class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primaryHover transition text-sm font-medium shadow-sm">
            + Create Permission
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-4 px-4 py-3 rounded-lg bg-emerald-50 text-emerald-700 border border-emerald-200 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table Card -->
    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">

                <!-- Table Head -->
                <thead class="bg-slate-50 text-slate-500 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4 text-right">Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-slate-100">
                    @foreach($permissions as $permission)
                    <tr class="hover:bg-slate-50 transition">

                        <!-- ID -->
                        <td class="px-6 py-4 font-medium text-slate-700">
                            {{ $permission->id }}
                        </td>

                        <!-- Name -->
                        <td class="px-6 py-4 font-medium text-slate-900">
                            {{ $permission->name }}
                        </td>

                        <!-- Actions -->
                        <td class="px-6 py-4 text-right flex justify-end gap-2">

                            <a href="{{ route('permissions.edit', $permission->id) }}"
                               class="px-3 py-1.5 text-xs font-medium text-white bg-sky-500 hover:bg-sky-600 rounded-lg transition">
                                Edit
                            </a>

                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST"
                                  onsubmit="return confirm('Delete this permission?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="px-3 py-1.5 text-xs font-medium text-white bg-rose-500 hover:bg-rose-600 rounded-lg transition">
                                    Delete
                                </button>

                            </form>

                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</div>
@endsection