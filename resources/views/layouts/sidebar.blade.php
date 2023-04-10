<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.settings.index') }}">
        <div class="sidebar-brand-text">Zamana</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
           aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-cog"></i>
            <span>Panel</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Bölümler:</h6>
                <a class="collapse-item" href="{{ route('admin.settings.index') }}">HomePage</a>
                <a class="collapse-item" href="{{ route('admin.aboutus') }}">About Us</a>
                <a class="collapse-item" href="{{ route('admin.address') }}">Address</a>
                <a class="collapse-item" href="{{ route('admin.email') }}">Email</a>
                <a class="collapse-item" href="{{ route('admin.tell') }}">Tel Number</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Bölümler
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item Request::is('admin/category') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Product</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Bölümler:</h6>
                <a class="collapse-item" href="{{ route('admin.category.index') }}">Category</a>
                <a class="collapse-item" href="{{ route('admin.product.index') }}">Product</a>
            </div>
        </div>
    </li>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item Request::is('admin/moment') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('admin.moment.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pursatlar</span>
        </a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/suggest') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('admin.suggest.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Maslahatlar</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/partner') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('admin.partner.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Partner</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
