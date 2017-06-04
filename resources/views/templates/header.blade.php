<header class="main-header">

    <!-- Logo -->
    <a href="/dashboard" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><i><b>T</b>est</i></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>T</b>ES<b>T</b> <b>Pa</b>g<b>e</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
    @yield('sidebar-toggle')
    <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">
                            <i class="fa  fa-sign-in"> Sign in</i></a></li>
                    <li><a href="{{ url('/register') }}">
                            <i class="fa fa-user-plus"> Register</i></a></li>
                @else
                    <li class="dropdown user user-menu">
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa  fa-sign-out"> Sign out</i>
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>