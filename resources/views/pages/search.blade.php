@php
    $increment = 100;
@endphp

@extends('layouts.app')

@section('title')
    Go-Sinau Class Page
@endsection

@section('content')
    <div class="container mx-auto px-24">
            
        <!-- view with category -->
        <div class="flex text-xl font-bold gap-8 text-white pt-8">
            <a href="/search">Semua</a>
            {{-- <a data-aos="fade-right" data-aos-delay="400" href="{{ route('categories') }}">Semua</a> --}}
            @foreach ($categories as $category)
                <a 
                data-aos="fade-right" data-aos-delay="{{ $increment += 100 }}" 
                href="{{ route('search-category', $category->id) }}">{{ $category->name }}</a>
            @endforeach
        </div>

        <!-- rekomendasi kelas -->
        <div class="pb-32">
            <div class="flex flex-wrap justify-around p-4">
                    @forelse ($classes as $class)
                        <div data-aos="fade-up" data-aos-delay="200" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                            <div class="">
                                <img class="w-full" src="{{ Storage::url($class->photo) }}" alt="">
                            </div>
                            <div class="my-4 h-1/3 border-b-2">
                                <h1 class="text-xl font-bold pb-3">{{ $class->name }}</h1>
                                <p>{{ $class->title }}</p>
                            </div>
                            <div class="text-center pb-14">
                                <h1 class="text-xl text-gray-800 font-bold">{{ $class->video->count() }} Materi</h1>
                            </div>
                        </div>
                    @empty
                        <h1 class="bg-gray-400 text-gray-800 text-2xl py-4 px-10 mt-24 rounded-full">Kelas Tidak Ditemukan!</h1>
                    @endforelse
                
            </div>
        </div>


    </div>
@endsection