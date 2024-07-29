<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <div class="pointer" data-toggle="dropdown">
                <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
                    <span class="semi-bold" style="font-weight: 500 ;">
                        PEGAWAI

                        <img src="{{ url('/') }}/dist/img/profile.jpg" alt="User Avatar"
                            style="width: 42px;height: 42px; padding: 8px; margin: 0px; " class="img-circle">

                    </span>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                    <div class="">
                        <p class="dropdown-header font-weight-bold">
                            Dhea
                        </p>
                    </div>
                </div>
                <a href="{{ url('profile') }}" class="dropdown-item d-block p-h-15">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fas fa-user"></i>
                            <span class="m-l-10">Profile</span>
                        </div>
                        <i class="anticon font-size-10 anticon-right"></i>
                    </div>
                </a>
                <a href="{{ url('logout') }}" class="dropdown-item d-block p-h-15">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="m-l-10">Logout</span>
                        </div>
                        <i class="anticon font-size-10 anticon-right"></i>
                    </div>
                </a>
            </div>
        </li>
    </ul>
</nav>
