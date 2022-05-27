<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">{{__('Core')}}</div>
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                {{__('Dashboard')}}
            </a>
            <a class="nav-link" href="{{route('admin.users')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                {{__('заявки груз')}}
            </a>
            <a class="nav-link" href="{{route('admin.transport')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                {{__('Завяки транспорт')}}
            </a>
            <a class="nav-link" href="{{route('admin.requests')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                {{__('Завяки формы')}}
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Username
    </div>
</nav>
