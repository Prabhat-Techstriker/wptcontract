<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('users_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users nav-icon">

                    </i>
                    Contracts
                </a>
                <ul class="nav-dropdown-items">
                    <!-- <li class="nav-item">
                        <a href="{{url('contracts')}}" class="nav-link {{ request()->is('contracts') || request()->is('contracts/') ? 'active' : '' }}">
                           <i class="fa-fw fas fa-users nav-icon"></i>
                            All
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="{{ route("admin.contracts.create") }}" class="nav-link {{ request()->is('contracts/ ') || request()->is('contracts/create/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-envelope nav-icon">

                            </i>
                            Compose
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.contracts.sent") }}" class="nav-link {{ request()->is('contracts/sent') || request()->is('contracts/sent/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-send nav-icon">

                            </i>
                            Sent
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.contracts.completed") }}" class="nav-link {{ request()->is('contracts/completed') || request()->is('contracts/completed/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-check nav-icon">

                            </i>
                            completed
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item">
                <a href="{{url('contacts')}}" class="nav-link {{ request()->is('contacts') || request()->is('contacts/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-users nav-icon">

                    </i>
                    Contacts
                </a>
            </li>
            @can('users_manage')
            <li class="nav-item">
                <a href="{{url('sellers')}}" class="nav-link {{ request()->is('sellers') || request()->is('sellers/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-users nav-icon">

                    </i>
                    Sellers
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('projects')}}" class="nav-link {{ request()->is('projects') || request()->is('projects/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-briefcase nav-icon">

                    </i>
                    Projects
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route('auth.change_password') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-key">

                    </i>
                    Change password
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>