<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="/admin/users">Ubios</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav mr-0 mr-md-3 ml-auto ">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <form class="dropdown-item" method="POST" action="{{route('logout')}}">
                    @csrf
                    <input class="btn btn-primary" type="submit" value="Logout"/>
                </form>
                {{-- <a class="dropdown-item" href="{{route('logout')}}">Logout</a> --}}
            </div>
        </li>
    </ul>
</nav>
