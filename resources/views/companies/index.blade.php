@extends('layouts.app')

@section('content')
<div class="w-full">

    <!-- Page Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Companies</h2>
            <p class="text-sm text-slate-500 mt-1">Manage all registered companies</p>
        </div>

        @role('admin')
        <a href="{{ route('companies.create') }}"
           class="px-5 py-2 bg-primary text-white rounded-lg hover:bg-primaryHover transition font-medium">
            + Add Company
        </a>
        @endrole
    </div>

    <!-- Table Card -->
    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm overflow-hidden">

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-slate-50 text-slate-600 text-left">
                    <tr>
                        <th class="px-6 py-3 font-medium">Name</th>
                        <th class="px-6 py-3 font-medium">Email</th>
                        <th class="px-6 py-3 font-medium">Address</th>
                        <th class="px-6 py-3 font-medium">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">
                    @foreach($companies as $company)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-6 py-3 text-slate-700">{{ $company->name }}</td>
                        <td class="px-6 py-3 text-slate-600">{{ $company->email }}</td>
                        <td class="px-6 py-3 text-slate-600">{{ $company->address }}</td>

                        <td class="px-6 py-3">
                            <div class="flex items-center gap-2">

                                <a href="{{ route('companies.show', $company->id) }}"
                                   class="px-3 py-1 text-xs rounded-lg bg-sky-100 text-sky-700 hover:bg-sky-200 transition">
                                    View
                                </a>

                                @role('admin')
                                <a href="{{ route('companies.edit', $company->id) }}"
                                   class="px-3 py-1 text-xs rounded-lg bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                    Edit
                                </a>

                                <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Delete this company?')"
                                            class="px-3 py-1 text-xs rounded-lg bg-red-100 text-red-700 hover:bg-red-200 transition">
                                        Delete
                                    </button>
                                </form>
                                @endrole

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $companies->links() }}
    </div>

</div>
@endsection