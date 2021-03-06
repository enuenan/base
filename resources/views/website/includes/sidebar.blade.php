<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="https://dummyimage.com/200x150/d9e0e7/aaa" class="img-thumnail" alt="" height="150"
                            width="200">
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        {{ auth()->user()->name }}
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    {{-- <li><a href="{{ route('settings') }}"><i class="fa fa-cog"></i> Settings</a></li> --}}
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @if (auth()->user()->user_type == 1 && auth()->user()->is_admin == 1)
                <li
                    class="has-sub {{ request()->is('admin/all-admin') ? 'active' : '' }}
                                    {{ request()->is('admin/all-teacher') ? 'active' : '' }}
                                    {{ request()->is('admin/all-student') ? 'active' : '' }}
                                    {{ request()->is('admin/add-user') ? 'active' : '' }}
                                    {{ request()->is('admin/edit-user/*') ? 'active' : '' }}
                    ">
                    <a href="{{ route('user.index') }}">
                        {{-- <b class="caret"></b> --}}
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                    </a>
                    {{-- <ul class="sub-menu">
                        <li class="{{ request()->is('admin/all-admin') ? 'active' : '' }}">
                            <a href="{{ route('allAdmin') }}">All Admin
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/all-teacher') ? 'active' : '' }}">
                            <a href="{{ route('allTeacher') }}">All Teacher
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/all-student') ? 'active' : '' }}">
                            <a href="{{ route('allStudent') }}">All Student
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/add-user') ? 'active' : '' }}">
                            <a href="{{ route('user.create') }}">Add User</a>
                        </li>
                    </ul> --}}
                </li>
            @else

            @endif

            {{-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <span>Dashboard</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="index.html">Dashboard v1</a></li>
                    <li><a href="index_v2.html">Dashboard v2</a></li>
                </ul>
            </li> --}}
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                        class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
