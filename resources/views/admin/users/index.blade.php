@extends('layouts.app')

@section('content')
<div class="w-full">

    <!-- Page Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Users</h2>

        @can('user.create')
        <a href="{{ route('users.create') }}"
           class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primaryHover transition text-sm font-medium shadow-sm">
            + Create User
        </a>
        @endcan
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                
                <!-- Table Head -->
                <thead class="bg-slate-50 text-slate-500 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Role</th>
                        <th class="px-6 py-4 text-right">Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-slate-100">
                    @foreach($users as $user)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-6 py-4 font-medium text-slate-700">
                            {{ $user->id }}
                        </td>

                        <td class="px-6 py-4 font-medium text-slate-900">
                            {{ $user->name }}
                        </td>

                        <td class="px-6 py-4 text-slate-600">
                            {{ $user->email }}
                        </td>

                        <td class="px-6 py-4">
                            <span class="inline-flex px-2 py-1 text-xs rounded-full bg-indigo-50 text-primary font-medium">
                                {{ $user->roles->pluck('name')->implode(', ') }}
                            </span>
                        </td>

                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('users.edit', $user->id) }}"
                               class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-white bg-sky-500 hover:bg-sky-600 rounded-lg transition">
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