<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-robot"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin E-Perpustakaan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>


    <!-- Nav Item - User -->
    <li class="nav-item {{ request()->routeIs('users.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data User</span></a>
    </li>

    <!-- Nav Item - Buku -->
    <li class="nav-item {{ request()->RouteIs('books.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('books.index') }}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Data Buku</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- heading -->
    <div class="sidebar-heading ">
        Konfirmasi
    </div>

    <li class="nav-item {{ request()->RouteIs('borrows.index') ? 'active' : '' }}">
        <a href="{{ route('borrows.index') }}" class="nav-link">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Peminjaman</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Pengembalian</span>
        </a>
    </li>

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
