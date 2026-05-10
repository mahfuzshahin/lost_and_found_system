@extends('layouts.app')

@section('content')
<div class="w-full">

    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Edit Role</h2>
        <p class="text-sm text-slate-500 mt-1">Update role name and permissions</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-6">

        <form method="POST" action="{{ route('roles.update', $role->id) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Role Name -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Role Name</label>
                <input type="text" name="name" value="{{ $role->name }}" required
                    class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-2 text-sm
                           focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">
            </div>

            <!-- Permissions -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Permissions</label>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    @foreach($permissions as $permission)
                        <label class="flex items-center gap-2 p-3 border border-slate-200 rounded-lg hover:bg-slate-50 cursor-pointer transition">
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                   {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}
                                   class="h-4 w-4 text-primary border-slate-300 rounded focus:ring-primary">
                            <span class="text-sm text-slate-700">
                                {{ $permission->name }}
                            </span>
                        </label>
                    @endforeach
                </div>
            </div>

            <!-- Button -->
            <div class="pt-2">
                <button type="submit"
                    class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primaryHover transition font-medium shadow-sm">
                    Update Role
                </button>
            </div>

        </form>

    </div>
</div>
@endsection