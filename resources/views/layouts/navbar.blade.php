<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="d-flex align-items-center justify-content-between">
        <h6 class="mb-0 ms-3">
            @if(Request::is('/'))
            Dashboard
            @elseif(Request::is('jagung'))
            Detail Jagung
            @elseif(Request::is('cabai'))
            Detail Cabai
            @elseif(Request::is('ayam'))
            Detail Ayam
            @elseif(Request::is('nila'))
            Detail Nila
            @elseif(Request::is('katalog'))
            Katalog Produk
            @endif
        </h6>
    </div>

    <div class="navbar-nav align-items-center ms-auto">


        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute bottom-3" style="padding: 0.35rem;"></div>
                <i class="fa fa-bell me-lg-2 rounded-circle" style="width: 40px; height: 40px;" ></i>
                <span class="d-none d-lg-inline-flex">Notification</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light rounded justify-content-center p-2 pt-3">
                <div class="justify-content-center p-1 rounded rounded-3 mb-2">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Profile updated</h6>
                        <small>15 minutes ago</small>
                    </a>
                </div>
                <div class="justify-content-center p-1 rounded rounded-3 mb-2">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Profile updated</h6>
                        <small>15 minutes ago</small>
                    </a>
                </div>
            </div>
        </div>


        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                @if (auth()->user()->foto == NUll)
                @if (auth()->user()->role_id == 1)
                <img class="rounded-circle me-lg-2" src="{{ asset('img/admin.png') }}" alt="" style="width: 40px; height: 40px;">
                @elseif (auth()->user()->role_id == 2)
                <img class="rounded-circle me-lg-2" src="{{ asset('img/user.png') }}" alt="" style="width: 40px; height: 40px;">
                @endif
                @else
                <img class="rounded-circle me-lg-2" src="{{ asset('storage/' . auth()->user()->foto ) }}" alt="" style="width: 40px; height: 40px;">
                @endif
                <span class="d-none d-lg-inline-flex"> {{ auth()->user()->nama }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light rounded justify-content-center p-2 m-0">
                <!-- <a href="#" class="dropdown-item">My Profile</a> -->
                <a href="{{ route('profil') }}" class="dropdown-item">Profil</a>
                <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->