<aside id="sidebar"
        class="sidebar-transition w-64 bg-sidebar text-slate-300 flex flex-col h-full z-20 flex-shrink-0 absolute lg:relative transform -translate-x-full lg:translate-x-0">
        <!-- Logo Area -->
        <div class="h-16 flex items-center px-6 border-b border-indigo-900/50 bg-indigo-950/50">
            <div class="flex items-center gap-3">
                <div
                    class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold shadow-lg shadow-indigo-500/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-white tracking-wide">Nexus</span>
            </div>
            <!-- Mobile Close Button -->
            <button id="closeSidebar" class="ml-auto lg:hidden text-slate-400 hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
            <p class="px-3 text-xs font-semibold text-indigo-400 uppercase tracking-wider mb-2 mt-4">Overview</p>

            <a href="index.html"
                class="flex items-center gap-3 px-3 py-2.5 bg-indigo-900/40 text-white rounded-lg border border-indigo-500/20 shadow-sm transition group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <span class="font-medium">Dashboard</span>
            </a>

            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span class="font-medium">Analytics</span>
                <span class="ml-auto bg-indigo-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">New</span>
            </a>
            @can('user.view')
            <p class="px-3 text-xs font-semibold text-indigo-400 uppercase tracking-wider mb-2 mt-6">Management</p>

            <a href="{{ route('users.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="font-medium">Users</span>
            </a>
            @endcan
            @can('role.view')
            <a href="{{ route('roles.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="font-medium">Roles</span>
            </a>
            @endcan
            @can('permission.view')
            <a href="{{ route('permissions.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="font-medium">Permissions</span>
            </a>
            @endcan
            @can('company.view')
            <a href="{{ route('companies.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="font-medium">Companies</span>
            </a>
            @endcan
            @can('item.view')
            <a href="{{ route('lost.item') }}"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="font-medium">Lost Items</span>
            </a>
            @endcan

            <!-- Dropdown Nav Item -->
            <div>
                <button id="productsMenuBtn"
                    class="w-full flex items-center justify-between px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group focus:outline-none">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                        <span class="font-medium">Products</span>
                    </div>
                    <svg id="productsMenuChevron" xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="productsSubmenu"
                    class="hidden flex-col gap-1 pl-11 pr-3 mt-1 py-1 border-l border-indigo-500/20 ml-5">
                    <a href="#" class="text-sm text-slate-400 hover:text-white transition py-1.5">All Products</a>
                    <a href="#" class="text-sm text-slate-400 hover:text-white transition py-1.5">Categories</a>
                    <a href="#" class="text-sm text-slate-400 hover:text-white transition py-1.5">Inventory</a>
                </div>
            </div>

            <a href="transactions.html"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
                <span class="font-medium">Transactions</span>
            </a>

            <a href="forms.html"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="font-medium">Forms</span>
            </a>

            <a href="components.html"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                </svg>
                <span class="font-medium">UI Components</span>
            </a>

            <p class="px-3 text-xs font-semibold text-indigo-400 uppercase tracking-wider mb-2 mt-6">Settings</p>

            <a href="profile.html"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="font-medium">Profile</span>
            </a>

            <a href="#"
                class="flex items-center gap-3 px-3 py-2.5 text-slate-400 hover:text-white hover:bg-indigo-900/30 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-slate-500 group-hover:text-indigo-400 transition" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="font-medium">General</span>
            </a>
        </nav>

        <!-- Sidebar Footer / User -->
        <div class="p-4 border-t border-indigo-900/50 bg-indigo-950/30">
            <div class="flex items-center gap-3">
                <img src="https://i.pravatar.cc/150?img=68" alt="Admin User"
                    class="w-9 h-9 rounded-full object-cover border-2 border-indigo-500/50">
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-white truncate">Eleanor Pena</p>
                    <p class="text-xs text-slate-400 truncate">eleanor@nexus.com</p>
                </div>
            </div>
        </div>
    </aside>