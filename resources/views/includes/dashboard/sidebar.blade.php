<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <a href="{{ route('home') }}">
                <div class="avatar m">
                    <img src="{{ asset('/storage/'. Auth::user()->image) }}" style="width: 100px; height: 100px" alt="" srcset="">
                </div>
                <div class="d-none d-md-block d-lg-inline-block fs-4">{{ Auth::user()->name }}</div>
            </a>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class='sidebar-title'>Main Menu</li>

                <li class="sidebar-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                    <a href="{{ route('profile') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                @if (Auth::user()->role === "TEACHER")
                    <li class="sidebar-item  has-sub {{ (request()->is('dashboard/class*')) ? 'active' : '' }}">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                            <span>Class</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ route('class') }}" class="d-flex align-items-center">
                                    <i data-feather="list" width="20"></i><span>List Class</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('class-create') }}">
                                    <i data-feather="plus-square" width="20"></i><span>Create Class</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item  has-sub {{ (request()->is('dashboard/category*')) ? 'active' : '' }}">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="grid" width="20"></i>
                            <span>Category</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ route('category') }}" class="d-flex align-items-center">
                                    <i data-feather="list" width="20"></i><span>List Category</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('category-create') }}">
                                    <i data-feather="plus-square" width="20"></i><span>Create Category</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @elseif (Auth::user()->role === "USER")
                    <li class="sidebar-item {{ (request()->is('dashboard/myclass')) ? 'active' : '' }}">
                        <a href="{{ route('myclass') }}" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                            <span>My Class</span>
                        </a>

                    </li>
                @else
                    <li class="sidebar-item  has-sub {{ (request()->is('dashboard/admin*')) ? 'active' : '' }}">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                            <span>Admin Menu</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ route('admin-class') }}" class="d-flex align-items-center">
                                    <i data-feather="list" width="20"></i><span>List Class</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin-category') }}">
                                    <i data-feather="plus-square" width="20"></i><span>List Category</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            
                
                <li class="sidebar-item {{ (request()->is('dashboard/settings*')) ? 'active' : '' }}">
                    <a href="{{ route('password-edit', Auth::user()->id) }}" class='sidebar-link'>
                        <i data-feather="settings" width="20"></i>
                        <span>Setting</span>
                    </a>

                </li>
                <li class="sidebar-item">
                    {{-- <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Logout</span>
                    </a> --}}

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="sidebar-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i data-feather="log-out" width="20"></i>
                            <span>Logout</span>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
