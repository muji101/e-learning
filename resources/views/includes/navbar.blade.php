<div id="navbar"  class="sticky top-0 z-10">
    {{-- <div class="bg-gradient-to-r from-gray-400 via-gray-600 to-gray-400 flex justify-between items-center py-4 px-12 text-white"> --}}
    <div class="flex justify-between items-center py-2 px-12 text-white">
        <div class="flex py-2 space-x-14">
            <a href="#">
                <img src="{{ asset('/images/undraw_working_late_pukg.svg') }}" alt="" class="w-16">
            </a>
            <form action="{{ route('search') }}" method="GET">
                @csrf
                @method("GET")
                <div class="bg-blue-900 rounded-full">
                    <input type="search" name="search" class="w-40 rounded-tl-full rounded-bl-full py-2 px-4 text-black">
                    <button type="submit" class="px-4">Search</button>
                </div>
            </form>
        </div>
        <div class="flex gap-6 py-2 items-center">
            <a class="font-bold {{ request()->path() === '/' ? 'text-white' : 'text-blue-900' }}" href="{{ route('home') }}">Home</a>
            <a class="font-bold {{ request()->path() === 'categories' ? 'text-white' : 'text-blue-900' }}" href="{{ route('categories') }}">Class</a>
            <a class="font-bold text-blue-900" href="#">About</a>
            @guest
                <a href="{{ route('login') }}" class="animate-pulse py-2 px-8 border-2 border-blue-900 rounded-full hover:border-white hover:bg-blue-900 font-bold">Sign In</a>
                <a href="{{ route('register') }}" class="animate-pulse border-2 border-blue-900 px-8 py-2 rounded-full hover:border-white hover:bg-blue-900 font-bold">Sign Up</a>
            @endguest
            @auth
                <div @click.away="open = false" class="relative flex" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-1 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <div class="flex items-center space-x-4">
                                {{-- <a href="{{ route('profile') }}" class="flex space-x-2 items-center"> --}}
                                <img src="{{ asset('/images/avatar.png') }}" alt="" class="w-12 border-2 rounded-full">
                                <p>Hi, {{ Auth::user()->name }}</p>
                                {{-- </a> --}}
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-12 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-blue-900 rounded-md shadow dark-mode:bg-gray-800">
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-black" href="{{ route('profile') }}">
                            <i data-feather="home" width="20"></i>
                            <span>Dashboard</span>
                        </a>
                        {{-- <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg" href="#">Logout</a> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-black" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <i data-feather="log-out" width="20"></i>
                                <span>Logout</span>
                            </a>
                        </form>
                        </div>
                    </div>
                </div>  
            @endauth
            
        </div>
    </div>
</div>