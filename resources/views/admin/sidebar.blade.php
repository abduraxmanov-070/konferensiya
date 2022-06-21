<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

{{--                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">--}}
{{--                    <a href="{{route('admin.users.index')}}">--}}
{{--                        <i class="fas fa-user"></i>--}}
{{--                        <p>Foydalanuvchilar</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item {{  request()->routeIs('info.index') ? 'active' : '' }}">
                    <a href="{{route('info.index')}}">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <p>Info</p>
                    </a>
                </li>
            </ul>


        </div>

    </div>

</div>


