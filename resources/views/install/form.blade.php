@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-background">

    <div class="w-full max-w-xl bg-white rounded-2xl shadow-lg border border-slate-100 p-8">

        <h2 class="text-2xl font-bold text-slate-800 mb-6 text-center">
            Interactive Installation
        </h2>

        @if($errors->any())
            <div class="mb-4 p-3 rounded-lg bg-red-50 text-red-600 text-sm border border-red-200">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('install.run') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">
                    Company Name
                </label>
                <input type="text" name="company_name" required
                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">
                    Admin Name
                </label>
                <input type="text" name="admin_name" required
                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">
                    Admin Email
                </label>
                <input type="email" name="admin_email" required
                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">
                    Admin Password
                </label>
                <input type="password" name="admin_password" required
                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition">
            </div>

            <button type="submit"
                class="w-full bg-primary hover:bg-primaryHover text-white font-semibold py-3 rounded-lg transition shadow-sm">
                Install
            </button>

        </form>
    </div>

</div>
@endsection