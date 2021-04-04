<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{route('dashboard.index')}}"><img src="{{ url('../assets/images/logo.svg') }}" width="25" alt="Aero"><span class="m-l-10">Tuition Manager</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#"><img src="{{ url('../assets/images/profile_av.jpg') }}" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{ Auth::guard('admin')->user()->nama_petugas }}</h4>
                        <small>{{ Auth::guard('admin')->user()->level }}</small>
                    </div>
                </div>
            </li>            
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{route('dashboard.index')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::segment(1) === 'mainsite' ? 'active open' : null }}"><a target="_blank" rel="noopener noreferrer" href="{{route('main.site.login')}}"><i class="zmdi zmdi-tab"></i><span>Main Site</span></a></li>
            <li class="{{ Request::segment(1) === 'transaction' ? 'active open' : null }}">
                <a href="#Transaction" class="menu-toggle"><i class="zmdi zmdi-money-box"></i> <span>Transaction</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'payment' ? 'active ' : null }}"><a href="{{route('payment.payment')}}"><span>Payment</span></a></li>
                    <li class="{{ Request::segment(2) === 'history' ? 'active ' : null }}"><a href="{{route('history.history')}}"><span>History</span></a></li>
                </ul>
            </li>

            @if(Auth::guard('admin')->user()->level == 'admin')
            <li class="{{ Request::segment(1) === 'module' ? 'active open' : null }}">
                <a href="#Module" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Modules</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'officers' ? 'active' : null }}"><a href="{{route('officers.index')}}">Officers</a></li>
                    <li class="{{ Request::segment(2) === 'vocational' ? 'active' : null }}"><a href="{{route('vocational.index')}}">Vocational</a></li>
                    <li class="{{ Request::segment(2) === 'class' ? 'active' : null }}"><a href="{{route('class.index')}}">Class</a></li>
                    <li class="{{ Request::segment(2) === 'tuition' ? 'active' : null }}"><a href="{{route('tuition.index')}}">Tuition</a></li>
                    <li class="{{ Request::segment(2) === 'students' ? 'active' : null }}"><a href="{{route('students.index')}}">Students</a></li>
                </ul>
            </li>
            @endif

            <li class="{{ Request::segment(1) === 'report' ? 'active open' : null }}">
                <a href="#Report" class="menu-toggle"><i class="zmdi zmdi-print"></i> <span>Report</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'income' ? 'active ' : null }}"><a href="{{route('report.income')}}"><span>Income</span></a></li>
                    <li class="{{ Request::segment(2) === 'late payment' ? 'active ' : null }}"><a href="{{route('report.latePayment')}}"><span>Late Payment</span></a></li>
                </ul>
            </li>

        </ul>
    </div>
</aside>
