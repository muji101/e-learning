@php
    $increment = 100;
@endphp


@extends('layouts.app')

@section('title')
    Go-Sinau | Detail Mentor {{ $users->name }} 
@endsection

@section('content')
    <div class="container mx-auto px-2 md:px-24">

        <div class="py-2 md:py-8">
            <div class="md:py-4 text-gray-800">
                <h1 class="font-bold text-lg md:text-4xl py-4">
                    Profile Pengajar
                </h1>
            </div>
            <div data-aos="fade-right" data-aos-delay="200" class="md:grid md:grid-cols-2 bg-gray-100 rounded-2xl p-4 md:my-6 w-full md:w-8/12">
                <div class="md:col-span-1 pb-4">
                    <img class="rounded-full mx-auto w-32 md:h-52 md:w-52 object-cover" src="{{ asset('/storage/'. $users->image) }}" alt="Gambar Profile">
                </div>
                <div class="md:col-span-1 text-base md:text-lg">
                    <h1>{{ $users->description }}</h1>
                </div>
                <div class="md:py-4">
                    <div class="text-base py-4 text-center">
                        <h1 class="font-bold text-lg md:text-xl">{{ $users->name }}</h1>
                        <p class="text-base md:text-lg text-gray-500">{{ $users->title }}</p>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="flex space-x-2 md:space-x-4 text-gray-800 py-4 md:py-14">
            <a href="#" class="shadow text- base md:text-lg font-bold px-4 py-2 md:px-14 md:py-4 hover:bg-blue-900 hover:text-white border-2 border-blue-900 rounded-full">Kelas</a>
            <a href="#" class="shadow text- base md:text-lg font-bold px-4 py-2 md:px-14 md:py-4 hover:bg-blue-900 hover:text-white border-2 border-blue-900 rounded-full">Keahlian</a>
            <a href="#" class="shadow text- base md:text-lg font-bold px-4 py-2 md:px-14 md:py-4 hover:bg-blue-900 hover:text-white border-2 border-blue-900 rounded-full">Reviews</a>
        </div>
        
        <div class=" pb-8 md:pb-32">
            <div class="flex flex-wrap space-y-4 md:space-y-0 justify-around md:p-4 text-gray-100">
                @forelse ($classes as $class)
                    <a href="{{ route('class_detail', [$class->slug, $class->id]) }}" class="transform hover:scale-105">
                        <div data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}" class="w-full md:w-96 p-2 md:p-4 bg-white rounded-2xl shadow-lg md:mt-14">
                            <img class="w-full h-52 rounded-2xl object-cover" src="{{ asset('/storage/'.$class->photo) }}" alt="">
                            <div class="py-2 text-gray-700 border-b-2 md:h-32">
                                <h1 class="text-lg md:text-xl font-bold pb-3">{{ $class->name }}</h1>
                                <p class="text-base md:text-lg">{{ $class->title }}</p>
                            </div>
                            <div class="flex text-base md:text-lg justify-between">
                                <p class="italic text-blue-900">{{ $class->category->name }}</p>
                                <h1 class="text-blue-900">{{ $class->video->count() }} Materi</h1>
                            </div>
                        </div>
                    </a>
                @empty
                    <h1 class="bg-gray-400 text-gray-800 text-base px-4 py-2 mt-14 md:text-2xl md:py-4 md:px-10 md:mt-24 rounded-full">Kelas Tidak Ditemukan!</h1>
                @endforelse
            </div>
        </div>

        


    </div>
@endsection