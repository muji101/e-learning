<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="/dist/assets/images/logo.svg" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">


                <li class='sidebar-title'>Main Menu</li>



                <li class="sidebar-item active ">
                    <a href="{{ route('profile') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>

                </li>

                @if (Auth::user()->role === "TEACHER")
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                            <span>Class</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ route('class') }}">List Class</a>
                            </li>

                            <li>
                                <a href="{{ route('class-create') }}">Crate Class</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="grid" width="20"></i>
                            <span>Category</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ route('category') }}">List Cateogry</a>
                            </li>

                            <li>
                                <a href="{{ route('category-create') }}">Create Category</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="sidebar-item ">
                        <a href="{{ route('myclass') }}" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                            <span>My Class</span>
                        </a>

                    </li>
                @endif
            
                
                <li class="sidebar-item">
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