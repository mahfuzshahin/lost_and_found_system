@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="space-y-6">

                <!-- Page Header -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-slate-900">Dashboard Overview</h1>
                        <p class="text-slate-500 text-sm mt-1">Welcome back, here's what's happening with your project
                            today.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button
                            class="px-4 py-2 bg-white border border-slate-200 text-slate-700 rounded-lg hover:bg-slate-50 hover:text-slate-900 transition font-medium text-sm shadow-sm flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Last 30 Days
                        </button>
                        <button
                            class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primaryHover transition font-medium text-sm shadow-sm shadow-primary/30 flex items-center gap-2 hover-lift">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            New Report
                        </button>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Stat Card 1 -->
                    <div
                        class="bg-surface rounded-2xl p-6 border border-slate-100 shadow-sm hover-lift relative overflow-hidden group">
                        <div
                            class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-indigo-50 text-primary rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-slate-500">Total Revenue</p>
                                <h3 class="text-2xl font-bold text-slate-900 mt-1">$54,239</h3>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span
                                class="text-emerald-500 font-semibold flex items-center gap-1 bg-emerald-50 px-2 py-0.5 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                </svg>
                                12.5%
                            </span>
                            <span class="text-slate-400 ml-2">vs last month</span>
                        </div>
                    </div>

                    <!-- Stat Card 2 -->
                    <div
                        class="bg-surface rounded-2xl p-6 border border-slate-100 shadow-sm hover-lift relative overflow-hidden group">
                        <div
                            class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-sky-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-sky-50 text-sky-500 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-slate-500">Active Users</p>
                                <h3 class="text-2xl font-bold text-slate-900 mt-1">2,845</h3>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span
                                class="text-emerald-500 font-semibold flex items-center gap-1 bg-emerald-50 px-2 py-0.5 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                </svg>
                                5.2%
                            </span>
                            <span class="text-slate-400 ml-2">vs last month</span>
                        </div>
                    </div>

                    <!-- Stat Card 3 -->
                    <div
                        class="bg-surface rounded-2xl p-6 border border-slate-100 shadow-sm hover-lift relative overflow-hidden group">
                        <div
                            class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-emerald-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-emerald-50 text-emerald-500 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-slate-500">Sales Conversion</p>
                                <h3 class="text-2xl font-bold text-slate-900 mt-1">48.2%</h3>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span
                                class="text-rose-500 font-semibold flex items-center gap-1 bg-rose-50 px-2 py-0.5 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                </svg>
                                1.1%
                            </span>
                            <span class="text-slate-400 ml-2">vs last month</span>
                        </div>
                    </div>

                    <!-- Stat Card 4 -->
                    <div
                        class="bg-surface rounded-2xl p-6 border border-slate-100 shadow-sm hover-lift relative overflow-hidden group">
                        <div
                            class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-amber-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-amber-50 text-amber-500 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-slate-500">Total Visits</p>
                                <h3 class="text-2xl font-bold text-slate-900 mt-1">112.5k</h3>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span
                                class="text-emerald-500 font-semibold flex items-center gap-1 bg-emerald-50 px-2 py-0.5 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                </svg>
                                24.8%
                            </span>
                            <span class="text-slate-400 ml-2">vs last month</span>
                        </div>
                    </div>
                </div>

                <!-- Charts Area -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Chart -->
                    <div class="bg-surface rounded-2xl p-6 border border-slate-100 shadow-sm lg:col-span-2">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-bold text-slate-900">Revenue Overview</h2>
                            <select
                                class="bg-slate-50 border border-slate-200 text-slate-700 text-sm rounded-lg focus:ring-primary focus:border-primary block p-2">
                                <option>This Year</option>
                                <option>Last Year</option>
                                <option>Last 6 Months</option>
                            </select>
                        </div>
                        <div
                            class="relative h-[300px] w-full flex items-center justify-center rounded-xl bg-slate-50/50">
                            <!-- Chart.js Canvas -->
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>

                    <!-- Secondary Chart/Widget -->
                    <div class="bg-surface rounded-2xl p-6 border border-slate-100 shadow-sm">
                        <h2 class="text-lg font-bold text-slate-900 mb-4">Traffic Sources</h2>
                        <div class="relative h-[220px] w-full flex items-center justify-center">
                            <canvas id="doughnutChart"></canvas>
                        </div>
                        <div class="mt-4 space-y-3">
                            <div class="flex items-center justify-between text-sm">
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full bg-primary"></span>
                                    <span class="text-slate-600">Direct</span>
                                </div>
                                <span class="font-semibold text-slate-900">45%</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full bg-sky-400"></span>
                                    <span class="text-slate-600">Organic</span>
                                </div>
                                <span class="font-semibold text-slate-900">30%</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                                    <span class="text-slate-600">Social</span>
                                </div>
                                <span class="font-semibold text-slate-900">25%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Table -->
                <div class="bg-surface rounded-2xl border border-slate-100 shadow-sm overflow-hidden mb-8">
                    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                        <h2 class="text-lg font-bold text-slate-900">Recent Transactions</h2>
                        <a href="#" class="text-sm font-medium text-primary hover:text-primaryHover">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                            <thead class="text-xs text-slate-500 bg-slate-50/80 uppercase">
                                <tr>
                                    <th scope="col" class="px-6 py-4 font-medium tracking-wider">Transaction ID</th>
                                    <th scope="col" class="px-6 py-4 font-medium tracking-wider">Customer</th>
                                    <th scope="col" class="px-6 py-4 font-medium tracking-wider">Date</th>
                                    <th scope="col" class="px-6 py-4 font-medium tracking-wider">Amount</th>
                                    <th scope="col" class="px-6 py-4 font-medium tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="px-6 py-4 font-medium text-slate-900">#TR-2938</td>
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <img class="w-8 h-8 rounded-full" src="https://i.pravatar.cc/150?img=32"
                                            alt="Avatar">
                                        <div>
                                            <div class="font-medium text-slate-900">Michael Scott</div>
                                            <div class="text-xs text-slate-500">michael@dundermifflin.com</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500">Oct 24, 2023</td>
                                    <td class="px-6 py-4 font-medium text-slate-900">$240.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 border border-emerald-200">
                                            Completed
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="px-6 py-4 font-medium text-slate-900">#TR-2937</td>
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <img class="w-8 h-8 rounded-full" src="https://i.pravatar.cc/150?img=47"
                                            alt="Avatar">
                                        <div>
                                            <div class="font-medium text-slate-900">Dwight Schrute</div>
                                            <div class="text-xs text-slate-500">dwight@schrutefarms.com</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500">Oct 23, 2023</td>
                                    <td class="px-6 py-4 font-medium text-slate-900">$1,250.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 border border-amber-200">
                                            Pending
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="px-6 py-4 font-medium text-slate-900">#TR-2936</td>
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-xs">
                                            PB
                                        </div>
                                        <div>
                                            <div class="font-medium text-slate-900">Pam Beesly</div>
                                            <div class="text-xs text-slate-500">pam@dundermifflin.com</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500">Oct 21, 2023</td>
                                    <td class="px-6 py-4 font-medium text-slate-900">$85.50</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 border border-emerald-200">
                                            Completed
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="px-6 py-4 font-medium text-slate-900">#TR-2935</td>
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <img class="w-8 h-8 rounded-full" src="https://i.pravatar.cc/150?img=11"
                                            alt="Avatar">
                                        <div>
                                            <div class="font-medium text-slate-900">Jim Halpert</div>
                                            <div class="text-xs text-slate-500">jim@athlead.com</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500">Oct 20, 2023</td>
                                    <td class="px-6 py-4 font-medium text-slate-900">$420.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-100 text-rose-800 border border-rose-200">
                                            Failed
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

@endsection