@php
    $increment = 100;
@endphp

@extends('layouts.app')

@section('title')
    Go-Sinau | Search Class Page
@endsection

@section('content')
    <div class="container mx-auto px-2 md:px-24">
        
        <div class="grid grid-cols-5 md:grid-cols-4">
            <div class="col-span-2 md:col-span-1 py-11 pr-2 md:pr-4 border-r-2 md:border-r-4 border-gray-600">
                <!-- view with category -->
                <div class="sticky top-20 flex flex-col text-xl font-bold gap-2 md:gap-8 text-white pt-8">
                    <a 
                    href="{{ route('search') }}"
                    class="text-sm md:text-lg bg-gray-500 p-1 md:py-2 md:px-4 rounded-lg {{ (request()->is('search')) ? 'bg-gradient-to-r from-blue-900 to to-blue-400' : '' }}"
                    >Semua</a>
                    {{-- <a data-aos="fade-right" data-aos-delay="400" href="{{ route('categories') }}">Semua</a> --}}
                    @foreach ($categories as $category)
                        <a 
                        data-aos="fade-right" data-aos-delay="{{ $increment += 100 }}" 
                        href="{{ route('search-category', $category->id) }}"
                        class="text-sm md:text-lg bg-gray-500 p-1 md:py-2 md:px-4 rounded-lg {{ (request()->is('search/'.$category->id)) ? 'bg-gradient-to-r from-blue-900 to to-blue-400' : '' }}"
                        >{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-span-3 md:col-span-3">
                <!-- rekomendasi kelas -->
                <div class="pb-32">
                    <div class="flex flex-wrap justify-around md:p-4 text-gray-100">
                        @forelse ($classes as $class)
                            <a href="{{ route('class_detail', $class->id) }}" class="transform md:hover:scale-105">
                                <div data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}" class="md:w-96 p-2 md:p-4 m-1 bg-white rounded-2xl shadow-lg md:mt-14">
                                    <img class="w-full h-auto md:h-52 rounded-2xl object-cover" src="{{ asset('/storage/'.$class->photo) }}" alt="">
                                    <div class="py-2 text-gray-700 border-b-2 h-32">
                                        <h1 class="text-base md:text-xl font-bold pb-3">{{ $class->name }}</h1>
                                        <p class="text-sm md:text-lg">{{ $class->title }}</p>
                                    </div>
                                    <div class="flex justify-between text-sm md:text-md">
                                        <p class="italic text-blue-900">{{ $class->category->name }}</p>
                                        <h1 class="text-blue-900">{{ $class->video->count() }} Materi</h1>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <h1 class="bg-blue-900 text-white text-sm md:text-2xl py-1 px-2 mt-4 md:py-4 md:px-10 md:mt-24 rounded-full">Kelas Tidak Ditemukan!</h1>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        


    </div>
@endsection