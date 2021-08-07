@auth
    @php
        $image = Auth::user()->image;
    @endphp
@endauth
{{-- <div id="navbar"  class="bg-gray-600 sticky top-0 z-10">
    <div class="flex justify-between items-center py-2 px-12 text-white">
        <div class="flex py-2 space-x-6 items-center">
            <a href="{{ route('home') }}" class="flex space-x-2 items-center">
                <img src="{{ asset('/images/logo.png') }}" alt="" class="w-12">
                <p class="font-bold text-xl">Go Sinau</p>
            </a>
            <form action="{{ route('search') }}" method="GET">
                @csrf
                @method("GET")
                <div class="bg-blue-900 rounded-full flex items-center">
                    <input type="search" name="search" class="w-40 rounded-tl-full rounded-bl-full py-2 px-4 text-black">
                    <button type="submit" class="pl-2 pr-3 text-2xl"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        
        <div class="flex gap-6 py-2 items-center">
            <a class="font-bold {{ request()->path() === '/' ? 'text-white' : 'text-blue-900' }}" href="{{ route('home') }}">Home</a>
            <a href="{{ url('categories') }}" class="font-bold 
                {{ (request()->is('categories')) ? 'text-white' : 'text-blue-900' }} 
                " >Class</a>
            <a class="font-bold text-blue-900" href="#footer">About</a>
            @guest
                <a href="{{ route('login') }}" class="animate-pulse py-2 px-8 border-2 border-blue-900 rounded-full hover:border-white hover:bg-blue-900 font-bold">Sign In</a>
                <a href="{{ route('register') }}" class="animate-pulse border-2 border-blue-900 px-8 py-2 rounded-full hover:border-white hover:bg-blue-900 font-bold">Sign Up</a>
            @endguest
            @auth
                <div @click.away="open = false" class="relative flex" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-1 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <div class="flex items-center space-x-4">
                                <img src="{{ asset($image ? '/storage/'. Auth::user()->image : asset('/images/avatar.png') ) }}" alt="" class="border-2 rounded-full" style="width: 40px ; height: 40px">
                                <p>Hi, {{ Auth::user()->name }}</p>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-12 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-blue-900 rounded-md shadow dark-mode:bg-gray-800">
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-black" href="{{ route('profile') }}">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-black" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </form>
                        </div>
                    </div>
                </div>  
            @endauth
            
        </div>
    </div>
</div> --}}

<div id="navbar" class="w-full sticky top-0 text-black bg-gray-600 dark-mode:text-gray-200 dark-mode:bg-gray-800 z-10">
    <div class="container mx-auto px-2 md:px-16 lg:px-24">
        <div x-data="{ open: false }" class="flex flex-col md:items-center md:flex-row ">
            <div class="py-2 md:py-6 flex flex-row items-center justify-between space-x-6">
                <a href="#" class="flex space-x-2 items-center">
                    <img src="{{ asset('/images/logo.png') }}" alt="" class="w-10">
                    <p class="font-bold text-sm md:text-xl">Go Sinau</p>
                </a>
                <form action="{{ route('search') }}" method="GET">
                    @csrf
                    @method("GET")
                    <div class="bg-blue-900 rounded-full">
                        <input type="search" name="search" class="w-24 md:w-40 rounded-tl-full rounded-bl-full py-1 px-2 md:py-2 md:px-4 text-black">
                        <button type="submit" class="pl-0 pr-1 md:pl-2 md:pr-3"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex items-center md:flex-row md:justify-end md:space-x-6 space-y-2 md:space-y-0">
                <a class="font-bold {{ request()->path() === '/' ? 'text-white' : 'text-blue-900' }}" href="{{ route('home') }}">Home</a>
                <a href="{{ url('categories') }}" class="font-bold 
                    {{ (request()->is('categories')) ? 'text-white' : 'text-blue-900' }} 
                    {{-- {{ (request()->is('search')) ? 'text-white' : 'text-blue-900' }}  --}}
                    {{-- {{ (request()->is('class/{id}')) ? 'text-white' : 'text-blue-900' }}  --}}
                    " >Class</a>
                <a class="font-bold text-blue-900" href="#footer">About</a>
                @guest
                    <a href="{{ route('login') }}" class="animate-pulse py-1 px-4 md:py-2 md:px-8 border-2 border-blue-900 rounded-full hover:border-white hover:bg-blue-900 font-bold">Sign In</a>
                    <a href="{{ route('register') }}" class="animate-pulse py-1 px-4 md:py-2 md:px-8 border-2 border-blue-900 rounded-full hover:border-white hover:bg-blue-900 font-bold">Sign Up</a>
                @endguest
                @auth
                    <div @click.away="open = false" class="relative flex" x-data="{ open: false }">
                        <button @click="open = !open" class="flex flex-row items-center w-full px-1 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <div class="flex items-center space-x-4">
                                    <img src="{{ asset($image ? '/storage/'. Auth::user()->image : '/images/avatar.png' ) }}" alt="" class="border-2 rounded-full" style="width: 40px ; height: 40px">
                                    <p>Hi, {{ Auth::user()->name }}</p>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-12 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-blue-900 rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-black" href="{{ route('profile') }}">
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
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
</div>