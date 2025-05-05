<div class="header header-one">

    <div class="header-left header-left-one">
        <a href="{{route('admin_home')}}" class="logo">
            <img src="{{asset('images/bhavan/India-logo.png')}}" alt="Logo">
        </a>
        <a href="{{route('admin_home')}}" class="white-logo">
            <img src="{{asset('images/bhavan/India-logo.png')}}" alt="Logo">
        </a>
        <a href="index.html" class="logo logo-small">
            <img src="{{asset('images/bhavan/India-logo.png')}}" alt="Logo" width="30" height="30">
        </a>
    </div>

    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fas fa-bars"></i>
    </a>

    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav nav-tabs user-menu">
        <li class="nav-item dropdown">
            <div id="dropdown-notify" class="dropdown-content dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                </div>
            </div>
        </li>


        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle dropdown-trigger nav-link" data-target="dropdown-profile">
                <span class="user-img">
                    <img src="{{asset('admin_assets/img/profiles/avatar-01.jpg')}}" alt="">
                    <span class="status online"></span>
                </span>
                <span>Admin</span>
            </a>
            <div id="dropdown-profile" class="dropdown-content dropdown-menu">
                 <a class="dropdown-item" href="{{ route('change_password') }}"><i data-feather="settings" class="me-1"></i>
                    Settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}"><i data-feather="log-out" class="me-1"></i>
                    Logout</a>
            </div>
        </li>

    </ul>

</div>
