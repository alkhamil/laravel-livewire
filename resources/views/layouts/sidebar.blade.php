<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li><a class="nav-link" href="{{ route('dashboard.index') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        <li><a class="nav-link" href="{{ route('user.index') }}"><i class="far fa-user"></i> <span>User</span></a></li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Default Layout</a></li>
            </ul>
        </li>
    </ul>
</aside>