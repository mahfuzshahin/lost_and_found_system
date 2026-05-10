@extends('layouts.app')

@section('content')
<div class="w-full">

    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Add Lost Item</h2>
        <p class="text-sm text-slate-500 mt-1">Fill in the details of the lost item</p>
    </div>

    <!-- Alerts -->
    @if(session('success'))
        <div class="mb-4 p-3 rounded-lg bg-green-50 text-green-700 border border-green-100">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 p-3 rounded-lg bg-red-50 text-red-700 border border-red-100">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Card -->
    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-6">

        <form action="{{ route('lost.item.store') }}" method="POST" enctype="multipart/form-data"
              class="space-y-5">
            @csrf

            <!-- Item Name -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Item Name</label>
                <input type="text" name="name"
                    class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-2 text-sm
                           focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none"
                    placeholder="Enter item name">
            </div>

            <!-- Room Number -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">
                    Room Number <span class="text-red-500">*</span>
                </label>
                <input type="text" name="room_number" required
                    class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-2 text-sm
                           focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">
            </div>

            <!-- Lost Date -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">
                    Lost Date <span class="text-red-500">*</span>
                </label>
                <input type="date" name="lost_date" required
                    class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-2 text-sm
                           focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">
            </div>

            <!-- Status -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Status</label>
                <select name="status"
                    class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-2 text-sm
                           focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">
                    <option value="">Select Status</option>
                    <option value="pending">Pending</option>
                    <option value="returned">Returned</option>
                </select>
            </div>

            <!-- Picture -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Picture</label>
                <input type="file" name="picture"
                    class="w-full text-sm file:mr-4 file:py-2 file:px-4
                           file:rounded-lg file:border-0 file:bg-indigo-50 file:text-primary
                           hover:file:bg-indigo-100">
            </div>

            <!-- Buttons -->
            <div class="flex gap-3 pt-2">
                <button type="submit"
                    class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primaryHover transition font-medium">
                    Save Item
                </button>

                <a href="{{ route('lost.item') }}"
                    class="px-6 py-2 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition font-medium">
                    Cancel
                </a>
            </div>

        </form>

    </div>
</div>
@endsection