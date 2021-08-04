@php
    $link= isset($classes->video->first()->url)
@endphp
@extends('layouts.app')

@section('title')
    Go-Sinau Detail Class Page
@endsection

@section('content')
    <div class="container mx-auto px-24">
            
        {{-- <div class="shadow-2xl rounded-3xl">
            <div class="py-8">
                <div class="text-center text-gray-800">
                    <h1 class="font-bold text-4xl py-4">
                        {{ $classes->name }}
                    </h1>
                    <p>{{ $classes->title }}</p>
                </div>
                <div class="py-4 mx-28">
                    @if ($link)
                        <iframe width="1120" height="630" src="{{ $link ? $classes->video->first()->url : '' }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else
                        <h1 class="text-center text-white px-4 py-2 bg-blue-900 rounded-full">Belum Ada Video</h1>
                    @endif
                </div>
            </div>

            <div class="flex justify-evenly py-4 text-gray-800">
                <div class="text-center">
                    <h1 class="font-bold text-xl border-b-2 my-2">
                        Pengguna
                    </h1>
                    <p class="count text-lg">5121</p>
                </div>
                <div class="text-center">
                    <h1 class="font-bold text-xl border-b-2 my-2">
                        Materi
                    </h1>
                    <p class="count text-lg">{{ $classes->video->count() }}</p>
                </div>
                <div class="text-center">
                    <h1 class="font-bold text-xl border-b-2 my-2">
                        Durasi
                    </h1>
                    <span class="count text-lg">3</span> Jam
                    <span class="count text-lg">32</span> Menit
                </div>
            </div>

            <div class="text-center text-gray-800 py-14">

                <form method="POST" action="{{ route('class_join',[$classes->id, $classes->user->id]) }}">
                    @csrf
                    @method("POST")
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="class_id" value="{{ $classes->id }}">
                    <button class="bg-blue-900 text-lg font-bold px-14 py-4 rounded-full">Gabung Kelas</button>
                </form>
            </div>
        </div> --}}
        <div class="flex justify-between mt-16">
            {{-- <div class=""> --}}
                <div class=" text-gray-800">
                    <h1 class="font-bold text-4xl">
                        {{ $classes->name }}
                    </h1>
                    <p>{{ $classes->title }}</p>
                    <div class="flex flex-col py-4 text-gray-800">
                        <div class="mt-2">
                            <h1 class="font-bold text-xl border-b-2">
                                Pengguna
                            </h1>
                            <p class="count text-lg">{{ $joins->count() }}</p>
                        </div>
                        <div class="mt-2">
                            <h1 class="font-bold text-xl border-b-2">
                                Materi
                            </h1>
                            <p class="count text-lg">{{ $classes->video->count() }}</p>
                        </div>
                        <div class="mt-2">
                            <h1 class="font-bold text-xl border-b-2">
                                Durasi
                            </h1>
                            <span class="count text-lg">3</span> Jam
                            <span class="count text-lg">32</span> Menit
                        </div>
                    </div>
                    <div class="text-gray-800">

                        <form method="POST" action="{{ route('class_join',[$classes->id, isset($classes->video->first()->id) ? $classes->video->first()->id : $classes->user->id]) }}">
                            @csrf
                            @method("POST")
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="class_id" value="{{ $classes->id }}">
                            <button class="bg-blue-900 text-lg font-bold px-6 py-2 rounded-full shadow-xl text-white">Gabung Kelas</button>
                        </form>
                    </div>
                </div>
            {{-- </div> --}}
            {{-- <div class="col-span-1"> --}}
                <div class="">
                    @if ($link)
                        <iframe width="600" height="340" src="{{ $link ? $classes->video->first()->url : '' }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else
                        <h1 class="text-center text-white px-4 py-2 bg-blue-900 rounded-full">Belum Ada Video</h1>
                    @endif
                </div>
            {{-- </div> --}}
        </div>

        <div class="flex gap-4 text-gray-800 pt-14">
            <button onclick="des()" class="shadow text-lg font-bold px-6 py-2 hover:bg-blue-900 rounded-full border-2 border-blue-900">Deskripsi kelas</button>
            <button onclick="rat()" class="shadow text-lg font-bold px-6 py-2 hover:bg-blue-900 rounded-full border-2 border-blue-900">Review / Rating</button>
            <button onclick="mat()" class="shadow text-lg font-bold px-6 py-2 hover:bg-blue-900 rounded-full border-2 border-blue-900">Materi kelas</button>
        </div>

        
        {{-- deskripsi --}}
        <div id="des">
            <div class="py-4">
                <div class="py-4 text-gray-800">
                    <h1 class="font-bold text-4xl py-4">
                        {{ $classes->name }}
                    </h1>
                    <p class="text-lg">
                        {{ $classes->description }}
                    </p>
                </div>
            </div>
    
            <div class="py-4">
                <div class="py-4 text-gray-800">
                    <h1 class="font-bold text-4xl py-4">
                        Profile Pengajar
                    </h1>
                </div>
                <div data-aos="fade-right" data-aos-delay="200" class="grid grid-cols-2 bg-gray-300 rounded-2xl py-4 my-6 w-1/3">
                    <div class="row-span-1">
                        <div class="">
                            <img class="mx-auto rounded-full shadow-lg" src="{{ asset('/storage/'. $classes->user->image) }}" alt="Profile" style="width: 200px;">
                        </div>
                        <div class="text-center">
                            <h1 class="font-bold text-xl">{{ $classes->user->name }}</h1>
                            <p class="text-gray-500">{{ $classes->user->title }}</p>
                        </div>
                    </div>
                    <div class="row-span-1 text-base w-full">
                        <h1>{{ $classes->user->description }}</h1>
                        <div class="text-base py-4 text-blue-900">
                            <a href="{{ route('class_mentor', $classes->user->id) }}">Lihat Detail Mentor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- rating --}}
        <div id="rat" style="display: none">
            <div class="py-4">
                <div class="py-4 text-gray-800">
                    <h1 class="font-bold text-4xl py-4">
                        Reviews
                    </h1>
                </div>
                <div class="flex flex-wrap justify-start">
                    @forelse ($reviews as $review)
                        <div data-aos="fade-right" data-aos-delay="100" class="bg-gray-200 rounded-2xl shadow-lg p-4 my-6 mr-4 w-96">
                            <div class="grid grid-cols-2">
                                <div class="col-span-1">
                                    <img class="rounded-full w-24 h-24" src="{{ asset('storage/'.$review->user->image) }}" alt="">
                                </div>
                                <div class="col-span-1 pl-4">
                                    <h1 class="font-bold text-xl">{{ $review->user->name }}</h1>
                                    <p class="text-gray-500">{{ $review->user->title }}</p>
                                </div>
                            </div>
                            <div class="text-base pt-4">
                                <h1>{{ $review->content }}</h1>
                                <div class="text-base pt-4 text-blue-500">
                                    <p class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="text-center text-white px-4 py-2 bg-blue-900 rounded-full">Belum Ada Komentar!</h1>
                    @endforelse
                </div>
            </div>
        </div>

        {{-- materi --}}
        <div id="mat" style="display: none">
            <div class="py-4">
                <div class="py-4 text-gray-800">
                    <h1 class="font-bold text-4xl py-4">
                        Apa yang akan kamu pelajari?
                    </h1>
                </div>
                @forelse ($classes->chapter as $chapter)
                    <div class="py-4 px-8 bg-gray-200 rounded-2xl w-3/4 shadow-lg my-4">
                        <h1 class="font-bold text-xl py-4">
                            # {{ $chapter->name }}
                        </h1>
                        @foreach ($chapter->video as $video)
                            <div class="pl-4 flex justify-between py-2 text-blue-900">
                                <div class="flex items-center">
                                    <span class="pr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <p>{{ $video->title }}</p>
                                </div>
                                <div class="">
                                    <p>1 mins </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @empty
                    {{-- <h1 class="text-white text-center text-2xl py-2 px-4 bg-blue-900 rounded-full">Belum ada materi tersedia!</h1> --}}
                    <h1 class="text-center text-white px-4 py-2 bg-blue-900 rounded-full">Belum Ada Materi tersedia!</h1>

                @endforelse

            </div>
        </div>


    </div>
@endsection

@push('addon-script')
    <script>
        function des(){
            document.getElementById("des").style.display = "block";
            document.getElementById("rat").style.display = "none";
            document.getElementById("mat").style.display = "none";
        }
        function rat(){
            document.getElementById("rat").style.display = "block";
            document.getElementById("des").style.display = "none";
            document.getElementById("mat").style.display = "none";
        }
        function mat(){
            document.getElementById("mat").style.display = "block";
            document.getElementById("des").style.display = "none";
            document.getElementById("rat").style.display = "none";
        }
    </script>
@endpush