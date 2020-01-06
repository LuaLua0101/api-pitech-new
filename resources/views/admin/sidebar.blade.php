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
            <li>
                <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="icon icon-user"></i> Related Products</a>
                <ul class="collapse list-unstyled" id="pageSubmenu5">
                    <li class="@yield('list_relatedproduct_active')">
                        <a href="{{ route('adgetListRelatedProduct') }}"><i class="icon icon-list"></i>Danh
                        sách</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="icon icon-user"></i> Manual Types</a>
                <ul class="collapse list-unstyled" id="pageSubmenu6">
                    <li class="@yield('add_manualtype_active')"><a href="{{ route('adgetAddManualType') }}">
                        <i class="icon-form"></i>Thêm mới</a></li>
                    <li class="@yield('list_manualtype_active')">
                        <a href="{{ route('adgetListManualType') }}"><i class="icon icon-list"></i>Danh
                        sách</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="icon icon-user"></i> Manuals</a>
                <ul class="collapse list-unstyled" id="pageSubmenu7">
                    <li class="@yield('add_manual_active')"><a href="{{ route('adgetAddManual') }}">
                        <i class="icon-form"></i>Thêm mới</a></li>
                    <li class="@yield('list_manual_active')">
                        <a href="{{ route('adgetListManual') }}"><i class="icon icon-list"></i>Danh
                        sách</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="icon icon-user"></i> Building The Futures</a>
                <ul class="collapse list-unstyled" id="pageSubmenu8">
                    <li class="@yield('add_building_active')"><a href="{{ route('adgetAddBuilding') }}">
                        <i class="icon-form"></i>Thêm mới</a></li>
                    <li class="@yield('list_building_active')">
                        <a href="{{ route('adgetListBuilding') }}"><i class="icon icon-list"></i>Danh
                        sách</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu9" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="icon icon-user"></i> Careers</a>
                <ul class="collapse list-unstyled" id="pageSubmenu9">
                    <li class="@yield('add_career_active')"><a href="{{ route('adgetAddCareer') }}">
                        <i class="icon-form"></i>Thêm mới</a></li>
                    <li class="@yield('list_career_active')">
                        <a href="{{ route('adgetListCareer') }}"><i class="icon icon-list"></i>Danh
                        sách</a></li>
                </ul>
            </li>
    </ul>
</div>
