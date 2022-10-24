<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-futbol"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LM <sup>10</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    {{-- master siswa --}}
    <li class="nav-item {{ Request::is('mastersiswa') ? 'active' : '' }}">
        <a class="nav-link" href="/mastersiswa">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Master Siswa</span></a>
    </li>

    {{-- master Projects --}}
    <li class="nav-item {{ Request::is('masterprojects') ? 'active' : '' }}">
        <a class="nav-link" href="/masterprojects">
            <i class="fas fa-fw fa-project-diagram"></i>
            <span>Master Projects</span></a>
    </li>

    {{-- master Contact --}}
    <li class="nav-item {{ Request::is('mastercontact') ? 'active' : '' }}">
        <a class="nav-link" href="/mastercontact">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Master Contact</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/logout" onclick="return confirm('Yakin dyck??')">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">