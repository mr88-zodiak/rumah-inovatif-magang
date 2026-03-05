<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>


    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="index.html"><img src="{{url("assets/template/admin/assets/images/kominfo/logo.png");}}" alt="Logo" srcset=""></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item {{ Route::is('admin.home') ? 'active' : '' }} ">
                        <a href="{{route("admin.home")}}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub {{ Route::is('admin.course*') ? 'active' : '' }}">
                        <a href="#" class="sidebar-link">
                            <i class="fa fa-book"></i>
                            <span>Pelatihan</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item">
                                <a href="{{route("admin.course")}}">Semua Pelatihan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <form action="{{route("logout")}}" method="post">
                            @csrf
                            <button type="submit" class='sidebar-link bg-danger w-100 no-border text-light'>
                                <i class="fa fa-user text-light"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>                    


                    {{-- <li class="sidebar-item">
                        <a href="{{url("admin/entrant-all")}}" class='sidebar-link'>
                            <i class="fa fa-user"></i>
                            <span>List Semua Peserta</span>
                        </a>
                    </li> --}}
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>