<div id="navbar"  class="sticky top-0 z-10">
    {{-- <div class="bg-gradient-to-r from-gray-400 via-gray-600 to-gray-400 flex justify-between items-center py-4 px-12 text-white"> --}}
    <div class="flex justify-between items-center py-4 px-12 text-white">
        <div class="flex py-2 gap-14">
            <a href="#">
                <img src="/images/undraw_working_late_pukg.svg" alt="" class="w-16">
            </a>
            <form action="/search" method="GET">
                @csrf
                @method("GET")
                <div class="bg-blue-900 rounded-full">
                    <input type="search" name="search" class="w-40 rounded-tl-full rounded-bl-full py-2 px-4 text-black">
                    <button type="submit" class="px-4">Search</button>
                </div>
            </form>
        </div>
        <div class="flex gap-6 py-2 items-center">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('class_list') }}">Class</a>
            <a href="#">About</a>
            @guest
                <a href="{{ route('login') }}" class="py-2 px-8 border-2 border-blue-900 rounded-full hover:border-white hover:bg-blue-900 font-bold">Sign In</a>
                <a href="{{ route('register') }}" class="border-2 border-blue-900 px-8 py-2 rounded-full hover:border-white hover:bg-blue-900 font-bold">Sign Up</a>
            @endguest
            @auth
            <div class="">
                <a href="{{ route('profile') }}" class="flex gap-2 items-center">
                    <img src="/images/undraw_working_late_pukg.svg" alt="" class="w-12">
                    <p>Hi, {{ Auth::user()->name }}</p>
                </a>
            </div>
            @endauth
        </div>
    </div>
</div>