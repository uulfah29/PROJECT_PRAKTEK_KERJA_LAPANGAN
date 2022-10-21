<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('p1/dist/img/Logo UMBJM.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a>Kemahasiswaan UMBJM</a>
        </div>
    </div>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
        <img src="{{asset('p1/dist/img/user.png')}}" class="img-circle elevation-2" alt="User Image">
        <div class="info">
            <a class="d-black">{{ Auth()->User()->name}}</a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview menu-open">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-house-user"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            @if (Auth()->user()->level=="Admin")
            <li class="nav-item">
                <a href="/Dpp" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>Proposal</br>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/Dpl" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>LPJ</br>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/registrasi" class="nav-link">
                    <i class="nav-icon fa-solid fas fa-user-plus"></i>
                    <p>Add User</br>
                    </p>
                </a>
            </li>
            @endif

            @if (Auth()->user()->level=="User")
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Forms
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/Proposall" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ajukan Proposal</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/createlpj" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Serahkan LPJ</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Status Berkas
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sbdpp" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Proposal</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/sbdpl" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>LPJ</p>
                        </a>
                    </li>
                </ul>
                @endif
            </li>
        </ul>
    </nav>
</div>