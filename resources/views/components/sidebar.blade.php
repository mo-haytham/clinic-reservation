<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-stethoscope"></i>
        </div>
        <div class="sidebar-brand-text mx-1">Clinic System</div>
    </a>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Reservation
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('reservations.index') }}">
            <i class="fas fa-clinic-medical"></i>
            <span>Reservations</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
