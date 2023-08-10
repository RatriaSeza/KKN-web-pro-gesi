<div class="">
    <ul class="sticky-top navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
            <div class="sidebar-brand-icon">
                <img class="img-fluid" style="width: 40px; height: 40px;" src="{{ asset('img/sragen-logo.png') }}" alt="Sragen">
            </div>
            <div class="sidebar-brand-text fw-medium mx-3">Desa Gesi</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Home -->
        <li class="nav-item" id="nav-home">
            <a class="nav-link" href="{{ route('admin') }}">
                <i class="fa-solid fa-home"></i>
                <span>Beranda</span></a>
        </li>

        <!-- Nav Item - Berita -->
        <li class="nav-item" id="nav-news">
            <a class="nav-link" href="{{ route('admin.news') }}">
                <i class="fa-solid fa-newspaper"></i>
                <span>Berita</span></a>
        </li>

        <!-- Nav Item - Charts -->
        {{-- <li class="nav-item" id="nav-data">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Data</span></a>
        </li> --}}

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
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
</div>
