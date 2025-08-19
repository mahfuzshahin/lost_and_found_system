<!-- Sidebar -->
<aside class="main-sidebar bg-dark text-white vh-100 p-3">
    <h5 class="mb-4">Menu</h5>
    <ul class="nav flex-column">

        <li class="nav-item">
            <a href="#" class="nav-link text-white">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </li>

        @can('user.view')
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link text-white">
                <i class="fas fa-users"></i> Users
            </a>
        </li>
        @endcan

        @can('role.view')
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link text-white">
                <i class="fas fa-user-shield"></i> Roles
            </a>
        </li>
        @endcan

        @can('company.view')
        <li class="nav-item">
            <a href="{{ route('companies.index') }}" class="nav-link text-white">
                <i class="fas fa-building"></i> Companies
            </a>
        </li>
        @endcan

    </ul>
</aside>
