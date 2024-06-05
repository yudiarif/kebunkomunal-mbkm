        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h5 class="text-primary">Selamat Datang</h5>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="" src="{{asset('img/logo.png')  }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3" style="text-align: start;">
                        <h6 class="mb-0">Kebun Komunal</h6>
                        <span>{{ auth()->user()->nama }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    @if (auth()->user()->role_id == 2)
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('cabai', 'jagung') ? 'show active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-leaf me-2"></i>Tanaman</a>
                        <div class="dropdown-menu bg-transparent border-0 {{ Request::is('cabai', 'jagung') ? 'show' : '' }}">
                            @if (!auth()->user()->KomoditiInfoCabai->isEmpty())
                            <a href="{{ url('/cabai') }}" class="dropdown-item {{ Request::is('cabai') ? 'active' : '' }}"><i class="fa fa-pepper-hot me-3"></i>Cabai</a>
                            @endif
                            @if (!auth()->user()->KomoditiInfoJagung->isEmpty())
                            <a href="{{ url('/jagung') }}" class="dropdown-item {{ Request::is('jagung') ? 'active' : '' }}"><i class="fa fa-seedling me-3"></i>Jagung</a>
                            @endif
                        </div>
                    </div>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('ayam', 'nila') ? 'show active' : '' }}" data-bs-toggle="dropdown"><i class="fas fa-feather-alt me-2"></i>Hewan</a>
                        <div class="dropdown-menu bg-transparent border-0 {{ Request::is('ayam', 'nila') ? 'show' : '' }}">
                            @if (!auth()->user()->KomoditiInfoAyam->isEmpty())
                            <a href="{{ url('/ayam') }}" class="dropdown-item {{ Request::is('ayam') ? 'active' : '' }}"><i class="fa fa-drumstick-bite me-3"></i>Ayam</a>
                            @endif
                            @if (!auth()->user()->KomoditiInfoNila->isEmpty())
                            <a href="{{ url('/nila') }}" class="dropdown-item {{ Request::is('nila') ? 'active' : '' }}"><i class="fa fa-fish me-3"></i>Nila</a>
                            @endif
                        </div>
                    </div> -->
                    <a href="{{ url('/katalog') }}" class="nav-item nav-link {{ Request::is('katalog') ? 'active' : '' }}"><i class="fa fa-shopping-basket me-2"></i>Katalog</a>
                    @elseif(auth()->user()->role_id == 1)
                    <a href="{{ url('/admin/dashboard') }}" class="nav-item nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ url('/admin/users') }}" class="nav-item nav-link {{ Request::is('admin/users') ? 'active' : '' }}"><i class="fa fa-user-alt me-2"></i>Users</a>
                    <a href="{{ url('/admin/komoditi') }}" class="nav-item nav-link {{ Request::is('admin/komoditi') ? 'active' : '' }}"><i class="fa fa-leaf me-2"></i>Kelola Komoditi</a>
                    <a href="{{ url('/admin/pupuk') }}" class="nav-item nav-link {{ Request::is('admin/pupuk') ? 'active' : '' }}"><i class="fa fa-seedling me-2"></i>Kelola Pupuk</a>
                    <a href="{{ url('/admin/informasislot') }}" class="nav-item nav-link {{ Request::is('admin/informasislot') ? 'active' : '' }}"><i class="fa fa-solid fa-receipt me-2"></i>Informasi Slot</a>
                    <a href="{{ url('/admin/map') }}" class="nav-item nav-link {{ Request::is('admin/map') ? 'active' : '' }}"><i class="fa fa-solid fa-map me-2"></i>Kelola Map</a>
                    <a href="{{ url('/admin/katalog') }}" class="nav-item nav-link {{ Request::is('admin/katalog') ? 'active' : '' }}"><i class="fa fa-shopping-basket me-2"></i>Kelola Katalog</a>
                    @endif
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">