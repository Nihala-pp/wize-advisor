<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('admin.dashboard') }}" target="_blank">
            <img src="{{ asset('public/assets/img/WhitePNG.png') }}" class="navbar-brand-img h-100"
                alt="main_logo">
            <!-- <span class="ms-1 font-weight-bold text-white">wiseAdvizor </span> -->
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white active bg-gradient-primary" href="{{ route('admin.dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('admin.login_history') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-bell"></i>
                    </div>
                    <span class="nav-link-text ms-1">Login History</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('admin.logs') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-history"></i>
                    </div>
                    <span class="nav-link-text ms-1">Logs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('admin.user_profiles.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-tag"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white "
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i>
                    <span class="nav-link-text ms-2 ps-1">Mentors</span>
                </a>
                <div class="collapse " id="applicationsExamples">
                    <ul class="nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{ route('admin.mentors.list_mentors') }}">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Profile </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{ route('admin.mentors.reviews') }}">
                                <span class="sidenav-mini-icon"> E </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Expertise </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{ route('admin.mentors.experience') }}">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Blogs </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{ route('admin.mentors.expertise') }}">
                                <span class="sidenav-mini-icon"> V </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Vouchers </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link text-white " href="./pages/rtl.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="nav-link-text ms-1">Mentors</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('admin.mentors.scheduled-calls') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <span class="nav-link-text ms-1">Scheduled Calls</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="./pages/notifications.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-quora"></i>
                    </div>
                    <span class="nav-link-text ms-1">Community Posts</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="./pages/profile.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('logout') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-sign-out"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Out</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <!-- <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a> -->
        </div>
    </div>
</aside>