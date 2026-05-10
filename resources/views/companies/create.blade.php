@extends('layouts.app')

@section('content')
<div class="w-full">

    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Create Company</h2>
        <p class="text-sm text-slate-500 mt-1">Add a new company to the system</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-6">

        <form action="{{ route('companies.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Name</label>
                <input type="text" name="name" required
                    class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-2 text-sm
                           focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">

                @error('name')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                <input type="email" name="email"
                    class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-2 text-sm
                           focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">

                @error('email')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Address -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Address</label>
                <textarea name="address" rows="4"
                    class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-2 text-sm
                           focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none"></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex items-center gap-3 pt-2">
                <button type="submit"
                    class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primaryHover transition font-medium shadow-sm">
                    Save Company
                </button>

                <a href="{{ route('companies.index') }}"
                    class="px-6 py-2 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition font-medium">
                    Back
                </a>
            </div>

        </form>

    </div>
</div>
@endsection