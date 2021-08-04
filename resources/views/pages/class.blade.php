@php
    $increment = 100;
@endphp

@extends('layouts.app')

@section('title')
    Go-Sinau Class Page
@endsection

@section('content')
<div class="container mx-auto px-24">
        
    <!-- kategori -->
    <div class="pt-14">
        <div 
        data-aos="fade-right"
        data-aos-offset="100"
        data-aos-easing="ease-in-sine"
        class="font-bold my-5 relative text-gray-800 text-2xl">
            <div class="bg-blue-900 rounded-bl-full rounded-br-full w-3/12" style="height:7px"></div>
            <div class="absolute" style="bottom: -5px">Semua Kategori</div>
        </div>
        {{-- <div class="flex flex-wrap justify-evenly py-14 text-gray-100">
            @foreach ($categories as $category)
            <div data-aos="fade-right" data-aos-delay="{{ $increment += 100 }}" class="w-5/12">
                    <a href="{{ route('categories-detail', $category->name) }}">
                        <div class="bg-blue-900 flex rounded-2xl p-4 my-6">
                            <div class="">
                                <img class="" src="{{ asset('/storage/'.$category->photo) }}" alt="" style="width: 280px;">
                            </div>
                            <div class="pl-4 w-5/12">
                                <h1 class="font-bold text-lg border-b-2">{{ $category->name }}</h1>
                                <div class="h-40">
                                    <p class="py-4">{{ $category->description }}</p>
                                </div>
                                <div class="text-xl font-bold text-gray-800 border-t-2 pt-1">
                                    <h1>{{ $category->course->count() }} Kelas</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>    
            @endforeach
        </div> --}}
        <div class="flex flex-wrap space-x-2 justify-center py-14 text-gray-800">
                <div data-aos="fade-right" data-aos-delay="{{ $increment += 100 }}" class="border-2 border-blue-900 bg-gray-50 rounded-lg shadow-lg w-60 p-2 mt-2">
                    <a href="{{ route('categories') }}">
                        <div class="">
                            <img class="" src="{{ asset('/images/undraw_All.svg') }}" alt="" style="width: 280px; height: 180px">
                        </div>
                        <div class="rounded-2xl">
                            <div class="text-center">
                                <h1 class="font-bold text-lg border-b-2 border-gray-300">All</h1>
                                <div class="h-16">
                                    <p class="">Semua Kategori</p>
                                </div>
                                <div class="text-xl font-bold text-gray-800 border-t-2 border-gray-300 pt-1">
                                    <h1>{{ $classCount->count() }} Kelas</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>   
            @foreach ($categories as $category)
                <div data-aos="fade-right" data-aos-delay="{{ $increment += 100 }}" class="border-2 border-blue-900 bg-gray-50 rounded-lg shadow-lg w-60 p-2 mt-2">
                    <a href="{{ route('categories-detail', $category->name) }}">
                        <div class="">
                            <img class="" src="{{ asset('/storage/'.$category->photo) }}" alt="" style="width: 280px; height: 180px">
                        </div>
                        <div class="rounded-2xl">
                            <div class="text-center">
                                <h1 class="font-bold text-lg border-b-2 border-gray-300">{{ $category->name }}</h1>
                                <div class="h-16">
                                    <p class="">{{ $category->description }}</p>
                                </div>
                                <div class="text-xl font-bold text-gray-800 border-t-2 border-gray-300 pt-1">
                                    <h1>{{ $category->course->count() }} Kelas</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>    
            @endforeach
        </div>
    </div>

    <!-- view with category -->
    <div class="pt-14">
        <div 
        data-aos="fade-right"
        data-aos-offset="100"
        data-aos-easing="ease-in-sine"
        class="font-bold my-5 relative text-gray-800 text-2xl">
            <div class="bg-blue-900 rounded-bl-full rounded-br-full w-2/12" style="height:7px"></div>
            <div class="absolute" style="bottom: -5px">Pilih Kelas</div>
        </div>
        {{-- <div class="flex text-xl font-bold gap-8 text-gray-800 pt-8 overflow-hidden">
            <a data-aos="fade-right" data-aos-delay="400" href="{{ route('categories') }}">Semua</a>
            @foreach ($categories as $category)
                <a 
                data-aos="fade-right" data-aos-delay="{{ $increment += 100 }}" 
                href="{{ route('categories-detail', $category->name) }}">{{ $category->name }}</a>
            @endforeach
        </div> --}}
    </div>

    <!-- rekomendasi kelas -->
    <div class="pb-32">
        <div class="flex flex-wrap justify-around p-4 text-gray-100">
            @forelse ($classes as $class)
                <a href="{{ route('class_detail', $class->id) }}" class=" transform hover:scale-105">
                    <div data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}" class="w-96 p-4 bg-white rounded-2xl shadow-lg mt-14">
                        <img class="w-full h-52 rounded-2xl" src="{{ asset('/storage/'.$class->photo) }}" alt="">
                        <div class="py-2 text-gray-700 border-b-2 h-32">
                            <h1 class="text-xl font-bold pb-3">{{ $class->name }}</h1>
                            <p>{{ $class->title }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="italic text-blue-900">{{ $class->category->name }}</p>
                            <h1 class="text-blue-900">{{ $class->video->count() }} Materi</h1>
                        </div>
                    </div>
                </a>
            @empty
                <h1 class="bg-gray-400 text-gray-800 text-2xl py-4 px-10 mt-24 rounded-full">Kelas Tidak Ditemukan!</h1>
            @endforelse
        </div>
    </div>

    <!-- apa kata alumni -->
    <div class="py-4 sm:py-14">
        <div class="text-center">
            <h1 class="text-2xl font-bold">Trusted by Thousands of Happy Customer</h1>
            <p class="text-base py-2">These are the stories of our customers who have joined us with great pleasure when using this crazy feature.</p>
        </div>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($reviews as $review)
                    <li class="splide__slide">
                        <div class="flex py-14">
                            <div class="mx-auto py-8 px-8 border-2 bg-gray-50 border-blue-900 w-96 h-56 rounded-xl">
                                <div class="flex items-center justify-between">
                                    <img src="{{ asset('/storage/'.$review->user->image) }}" alt="" class="w-14 h-14 rounded-lg">
                                    <div class="">
                                        <h1 class="text-lg font-bold">{{ $review->user->name }}</h1>
                                        <p class="text-sm">{{ $review->user->title }}</p>
                                    </div>
                                    <div class="inline-flex items-center">
                                        4.5
                                        <img class="w-4" src="{{ asset('images/star.png') }}" alt="">
                                    </div>
                                </div>
                                <p class="pt-2 text-base">“{{ $review->content }}”</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection