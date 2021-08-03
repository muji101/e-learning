@php
    $increment = 100;
@endphp

@extends('layouts.app')

@section('title')
    Go-Sinau Class Page
@endsection

@section('content')
    <div class="container mx-auto px-24">
        
        <div class="grid grid-cols-5">
            <div class="col-span-1 py-11 pr-4 border-r-4 border-gray-600">
                <!-- view with category -->
                <div class="sticky top-20 flex flex-col text-xl font-bold gap-8 text-white pt-8">
                    <a 
                    href="/search"
                    class="bg-gray-500 py-2 px-4 rounded-lg {{ (request()->is('search')) ? 'bg-gradient-to-r from-blue-900 to to-blue-400' : '' }}"
                    >Semua</a>
                    {{-- <a data-aos="fade-right" data-aos-delay="400" href="{{ route('categories') }}">Semua</a> --}}
                    @foreach ($categories as $category)
                        <a 
                        data-aos="fade-right" data-aos-delay="{{ $increment += 100 }}" 
                        href="{{ route('search-category', $category->id) }}"
                        class="bg-gray-500 py-2 px-4 rounded-lg {{ (request()->is('search/'.$category->id)) ? 'bg-gradient-to-r from-blue-900 to to-blue-400' : '' }}"
                        >{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-span-4">
                <!-- rekomendasi kelas -->
                <div class="pb-32">
                    <div class="flex flex-wrap justify-around p-4 text-gray-100">
                        @forelse ($classes as $class)
                            <a href="{{ route('class_detail', $class->id) }}">
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
            </div>
        </div>
        


    </div>
@endsection