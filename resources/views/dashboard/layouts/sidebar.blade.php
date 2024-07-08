<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-shop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-Commerce</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Shop
    </div>

    <!-- Nav Item - Orders -->
    <li class="nav-item {{ Request::is('dashboard/orders') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/orders">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Orders</span></a>
    </li>
    <!-- Nav Item - Payments -->
    <li class="nav-item {{ Request::is('dashboard/payments') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/payments">
            <i class="fa-solid fa-sack-dollar"></i>
            <span>Payments</span></a>
    </li>
    <!-- Nav Item - Orders Item -->
    <li class="nav-item {{ Request::is('dashboard/orders-item') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/orders-item">
            <i class="fa-solid fa-clipboard-check"></i>
            <span>Orders Item</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Products -->
    <li class="nav-item {{ Request::is('dashboard/products') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/products">
            <i class="fa-solid fa-boxes-stacked"></i>
            <span>Products</span></a>
    </li>
    <!-- Nav Item - Customers -->
    <li class="nav-item {{ Request::is('dashboard/customers') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/customers">
            <i class="fas fa-fw fa-users"></i>
            <span>Customers</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Settings
    </div>

    <!-- Nav Item - Profile -->
    <li class="nav-item {{ Request::is('dashboard/profile') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/profile">
            <i class="fas fa-fw fa-user-shield"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
