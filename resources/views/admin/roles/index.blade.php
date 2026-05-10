@extends('layouts.app')

@section('content')
<div class="w-full">

    <!-- Page Header -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Roles</h2>
            <p class="text-sm text-slate-500 mt-1">Manage roles and their permissions</p>
        </div>

        <a href="{{ route('roles.create') }}"
           class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primaryHover transition text-sm font-medium shadow-sm">
            + Create Role
        </a>
    </div>

    <!-- Table Card -->
    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">

                <!-- Head -->
                <thead class="bg-slate-50 text-slate-500 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Permissions</th>
                        <th class="px-6 py-4 text-right">Action</th>
                    </tr>
                </thead>

                <!-- Body -->
                <tbody class="divide-y divide-slate-100">
                    @foreach($roles as $role)
                    <tr class="hover:bg-slate-50 transition">

                        <!-- ID -->
                        <td class="px-6 py-4 font-medium text-slate-700">
                            {{ $role->id }}
                        </td>

                        <!-- Name -->
                        <td class="px-6 py-4 font-medium text-slate-900">
                            {{ $role->name }}
                        </td>

                        <!-- Permissions -->
                        <td class="px-6 py-4 text-slate-600">
                            <span class="text-xs bg-indigo-50 text-primary px-2 py-1 rounded-full">
                                {{ $role->permissions->pluck('name')->implode(', ') }}
                            </span>
                        </td>

                        <!-- Actions -->
                        <td class="px-6 py-4 text-right flex justify-end gap-2">

                            <a href="{{ route('roles.edit', $role->id) }}"
                               class="px-3 py-1.5 text-xs font-medium text-white bg-sky-500 hover:bg-sky-600 rounded-lg transition">
                                Edit
                            </a>

                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                  onsubmit="return confirm('Delete this role?')">
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