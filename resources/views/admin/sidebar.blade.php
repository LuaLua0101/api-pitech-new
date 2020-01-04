<div class="main-menu">
    <ul id="side-main-menu" class="side-menu list-unstyled">
        <li class="@yield('home_active')"><a href="{{route('adgetHome')}}"><i class="icon-home"></i>Home</a></li>
        <li class="@yield('list_user_active')"><a href="{{ route('adgetListUser') }}"><i class="icon icon-user"></i>Danh
                sách người dùng</a></li>
                <li>
                <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="icon icon-user"></i> Teach Me Series</a>
                <ul class="collapse list-unstyled" id="pageSubmenu1">
                    <li class="@yield('add_teachme_active')"><a href="{{ route('adgetAddNews') }}">
                        <i class="icon-form"></i>Thêm mới</a></li>
                    <li class="@yield('list_teachme_active')">
                        <a href="{{ route('adgetListNews') }}"><i class="icon icon-list"></i>Danh
                        sách</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="icon icon-user"></i> Iot Hubs</a>
                <ul class="collapse list-unstyled" id="pageSubmenu2">
                    <li class="@yield('add_iothub_active')"><a href="{{ route('adgetAddIotHub') }}">
                        <i class="icon-form"></i>Thêm mới</a></li>
                    <li class="@yield('list_iothub_active')">
                        <a href="{{ route('adgetListIotHub') }}"><i class="icon icon-list"></i>Danh
                        sách</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="icon icon-user"></i> Press Resources</a>
                <ul class="collapse list-unstyled" id="pageSubmenu3">
                    <li class="@yield('add_press_active')"><a href="{{ route('adgetAddPressResource') }}">
                        <i class="icon-form"></i>Thêm mới</a></li>
                    <li class="@yield('list_press_active')">
                        <a href="{{ route('adgetListPressResource') }}"><i class="icon icon-list"></i>Danh
                        sách</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="icon icon-user"></i> Applications</a>
                <ul class="collapse list-unstyled" id="pageSubmenu4">
                    <li class="@yield('add_app_active')"><a href="{{ route('adgetAddApplications') }}">
                        <i class="icon-form"></i>Thêm mới</a></li>
                    <li class="@yield('list_app_active')">
                        <a href="{{ route('adgetListApplications') }}"><i class="icon icon-list"></i>Danh
                        sách</a></li>
                </ul>
            </li>
    </ul>
</div>
