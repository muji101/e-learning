@php
    $video = isset($videos);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos Class Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- icon --}}
    <link rel="shortcut icon" href="{{ asset('/images/logo.png') }}" type="image/x-icon">

    <!-- splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- aos animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>

    <div class="flex justify-between items-center bg-gray-700 px-1 md:px-16">
            <div class="w-24 py-2 hidden md:block">
                <img src="{{ asset('/images/undraw_working_late_pukg.svg') }}" alt="">
            </div>
            <div class="py-4 text-gray-100">
                {{-- <h1 class="font-bold text-xl">{{ $classes->video->title }}</h1> --}}
                <h1 class="font-bold text-sm md:text-xl">Kelas : {{ $classes->name }}</h1>
                
                <span class="border-b-2 border-white pb-1 text-white text-xs md:text-md">Materi : {{ $video ? $videos->title : '' }}</span>
            </div>
            <div class="text-gray-100 text-xs md:text-lg md:font-bold">
                <a href="{{ route('class_detail_review', $classes->id) }}" class="px-2 py-1 md:px-8 md:py-3 bg-blue-900 rounded-full">Komenter</a>
                {{-- <button onclick="rating()" href="#" class="px-8 py-3 bg-blue-900 rounded-full">Beri Review Kelas</button> --}}
            </div>
    </div>

    <div class="flex-reverse md:flex">
        @php
            $link = isset($videos->url);
            $pn = isset($videos->id);
            //code prev next video
            $prev = request()->path() === 'class/video/'.$classes->id.'/'.$videos->first()->id;
            $next = request()->path() === 'class/video/'.$classes->id.'/'.$videosNext->first()->id;
        @endphp
        

        <div class="flex-grow bg-gray-600">
            <div class="sticky top-0 h-60  md:mx-8 md:py-4 md:h-screen">
                @if ($link)
                    <iframe class="w-full h-full" src="{{ $link ? $videos->url : '' }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @else
                    <h1 class="text-center text-white px-4 py-2 bg-blue-900 rounded-full">Belum Ada Video!</h1>
                @endif
            </div>
            <div class="sticky bottom-0 mt-8 px-12 text-gray-100 hidden md:block">
                <div class="flex justify-center">
                    @if ($prev)
                        
                    @else
                        <a href="{{ route('class_video', [$classes->id, $pn ? $videos->id -1 : '']) }}" class="py-2 px-6 mx-2 rounded-full bg-blue-900 bg-opacity-50 hover:bg-blue-900">
                            <i class="fas fa-arrow-left"></i>
                            Prev
                        </a>
                    @endif
                    
                    @if ($next)
                        <a href="{{ route('class_detail_review', $classes->id) }}" class="py-2 px-6 mx-2 rounded-full bg-blue-900 bg-opacity-50 hover:bg-blue-900">
                            Finish
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    @else
                        <a href="{{ route('class_video', [$classes->id, $pn ? $videos->id +1 : '']) }}" class="py-2 px-6 mx-2 rounded-full bg-blue-900 bg-opacity-50 hover:bg-blue-900">
                            Next
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    @endif
                    
                </div>
            </div>
        </div>

        <div class="bg-gray-800 ">
            <div class="hidden md:block">
                <div class="flex flex-col bg-blue-900 text-white px-4 py-2">
                    <button class="border-2 rounded-2xl my-1" onclick="hide()">hide</button>
                    <button class="border-2 rounded-2xl my-1" onclick="show()">show</button>
                </div>
            </div>
            <div id="side"  class="overflow-x-hidden h-screen">
                @forelse ($classes->chapter as $chapter)
                    <div class="text-sm md:text-lg py-2 px-2 md:py-4 md:px-4 border-b-2 mt-2">
                        <div class="">
                            <h1 class="text-gray-100 font-bold"># {{ $chapter->name }}</h1>
                        </div>
        
                        @foreach ($chapter->video as $video)
                        <div class="pl-4 flex py-2 my-2 text-white {{ request()->path() == 'class/video/'.$classes->id.'/'.$video->id ? 'text-white font-semibold bg-blue-900 py-2 px-6 rounded-full' : 'text-white bg-gray-700 py-2 px-6 rounded-full' }}">
                            <div class="flex items-center ">
                                <a 
                                    href="{{ route('class_video', [$classes->id, $video->id]) }}"
                                    class="flex items-center"
                                >
                                    <span class="pr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    {{ $video->title }}
                                </a>
                            </div>
                                {{-- <div class="">
                                    <p>1 mins </p>
                                </div> --}}
                        </div>
                        @endforeach
                    </div>
                @empty
                    <h1 class="text-center text-white py-2 bg-blue-900 rounded-full my-4 mx-4">Belum Ada Video!</h1>
                @endforelse
                
            </div>
        </div>
        
    </div>



    
    
    
    <script src="https://unpkg.com/jarallax@1/dist/jarallax.min.js"></script>
    <script src="https://unpkg.com/jarallax@1/dist/jarallax-video.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <script>
        new Splide( '.splide', {
            type    : 'loop',
            perPage : 1,
            autoplay: true,
        } ).mount();
    </script>

    <script>
        function hide(){
            document.getElementById("side").style.display = "none";
        }
        function show(){
            document.getElementById("side").style.display = "block";
        }
    </script>
</body>
</html>