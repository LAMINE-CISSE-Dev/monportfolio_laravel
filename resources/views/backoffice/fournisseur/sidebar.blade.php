<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-1">Mon Portfolio</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('produits')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Mes Projets</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('eproduits')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Mes Experiences</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('edproduits')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Educations</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('sproduits')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Professional Skills</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('lproduits')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Languages</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div  class="text-center d-none d-md-inline">
        <button class="bg-gradient-dark rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>