<div class="main-menu">
    <h5 class="sidenav-heading">Main</h5>
    <ul id="side-main-menu" class="side-menu list-unstyled">
        <li class="@yield('home_active')"><a href="{{route('adgetHome')}}"><i class="icon-home"></i>Home</a></li>
        <li class="@yield('add_news_active')"><a href="{{ route('adgetAddNews') }}"><i class="icon-form"></i>Thêm teachme series</a></li>
        <li class="@yield('list_news_active')"><a href="{{ route('adgetListNews') }}"><i class="icon icon-list"></i>Danh
                sách teach me series</a></li>
        <li class="@yield('list_user_active')"><a href="{{ route('adgetListUser') }}"><i class="icon icon-user"></i>Danh
                sách người dùng</a></li>
                <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="icon icon-user"></i> Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                </ul>
            </li>
    </ul>
</div>
