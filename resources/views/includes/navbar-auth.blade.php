<div class="navbar-scroll sticky top-0 z-10">
    <div class="flex justify-between items-center py-4 px-12 text-white">
        <div class="flex py-2 space-x-14">
            <a href="#">
                <img src="{{ asset('/images/undraw_working_late_pukg.svg') }}" alt="" class="w-16">
            </a>
            <input type="search" class="bg-gray-200 rounded-full py-2 px-4" placeholder="Search">
        </div>
        <div class="flex space-x-6 py-2 items-center">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('class_list') }}">Class</a>
            <a href="#">About</a>
        </div>
    </div>
</div>
