<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{route('dashboard.index')}}"><img src="../assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Tuition Manager</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>Nioni</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>            
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{route('dashboard.index')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::segment(1) === 'module' ? 'active open' : null }}">
                <a href="#Module" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Modules</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'officers' ? 'active' : null }}"><a href="{{route('officers.index')}}">Officers</a></li>
                    <li class="{{ Request::segment(2) === 'vocational' ? 'active' : null }}"><a href="{{route('vocational.index')}}">Vocational</a></li>
                    <li class="{{ Request::segment(2) === 'class' ? 'active' : null }}"><a href="{{route('class.index')}}">Class</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
