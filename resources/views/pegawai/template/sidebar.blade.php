<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-slate-900">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard') }}" class="brand-link">
        <img src="{{ url('/') }}/dist/img/logo-1.png" alt="Logo" class="brand-image img-circle"
            style="opacity: .8">
        <span class="brand-text font-weight-bold">Penyimpanan SP2D</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href=" {{ url('admin/dashboard') }}"
                        class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class=" nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">FITUR</li>

                <li
                    class="nav-item {{ request()->is('admin/sda', 'admin/ck', 'admin/bm') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-mail-bulk"></i>
                        <p>
                            Data SP2D
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    @if (auth()->user()->division == 'SDA')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('admin/sda') }}"
                                    class="nav-link {{ request()->is('admin/sda') ? 'active' : '' }}">
                                    <i class="nav-icon far fa-circle text-success"></i>
                                    <p>Sumber Daya Air (SDA)</p>
                                </a>
                            </li>
                        </ul>
                    @endif
                    @if (auth()->user()->division == 'CK')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('admin/ck') }}"
                                    class="nav-link {{ request()->is('admin/ck') ? 'active' : '' }}">
                                    <i class="nav-icon far fa-circle text-warning"></i>
                                    <p>Cipta Karya (CK)</p>
                                </a>
                            </li>
                        </ul>
                    @endif
                    @if (auth()->user()->division == 'BM')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('admin/bm') }}"
                                    class="nav-link {{ request()->is('admin/bm') ? 'active' : '' }}">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p>Bina Marga (BM)</p>
                                </a>
                            </li>
                        </ul>
                    @endif
                </li>
                <li class="nav-item ">
                    <a href=" {{ url('admin/pencarian') }}"
                        class="nav-link {{ request()->is('admin/pencarian') ? 'active' : '' }}">
                        <i class=" nav-icon fas fa-user-alt"></i>
                        <p>
                            Pencarian SP2D
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href=" {{ url('admin/user') }}"
                        class="nav-link {{ request()->is('admin/user') ? 'active' : '' }}">
                        <i class=" nav-icon fas fa-user-alt"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>
