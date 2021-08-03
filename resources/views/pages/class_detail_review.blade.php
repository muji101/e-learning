@php
    $link= isset($classes->video->first()->url)
@endphp
@extends('layouts.app')

@section('title')
    Go-Sinau Detail Class Review Page 
@endsection

@section('content')
    <div class="container mx-auto px-24">
            
        <div class="flex justify-between my-4">
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
                            <p class="count text-lg">5121</p>
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

                        <form method="POST" action="{{ route('class_join',[$classes->id, $classes->user->id]) }}">
                            @csrf
                            @method("POST")
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="class_id" value="{{ $classes->id }}">
                            <button class="bg-blue-900 text-lg font-bold px-6 py-2 rounded-full text-white">Gabung Kelas</button>
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

        <div>
            <div class="py-8">
                <div class="py-4 text-gray-100 border-b-2">
                    <h1 class="font-bold text-4xl py-4">
                        Reviews
                    </h1>
                </div>

                <form action="{{ route('class_review') }}" method="POST" class="">
                    @csrf
                    @method("POST")
                    <input type="hidden" name="class_id" value="{{ $classes->id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="py-4">
                        <h3 class="text-lg text-gray-800 font-bold">
                            Beri Ulasan
                        </h3>
                        <div class="my-2">
                            <div class="text-base text-blue-500">
                                <input type="hidden" name="rating" value="5">
                                <textarea name="content" id="" class="shadow-lg rounded-lg bg-gray-50 p-2 text-blue-900" cols="40" rows="5"></textarea>
                            </div>
                        </div>
                        <button class="bg-blue-900 py-2 px-8 rounded-full text-white">kirim</button>
                    </div>
                </form>

                <div class="flex flex-wrap justify-around">
                    @forelse ($reviews as $review)
                        <div data-aos="fade-right" data-aos-delay="100" class="bg-gray-100 rounded-2xl p-4 my-6 w-96 border-2 border-blue-900">
                            <div class="grid grid-cols-2">
                                <div class="col-span-1">
                                    <img class="rounded-full" src="{{ asset('storage/'.Auth::user()->image) }}" alt="" style="width: 150px;">
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