@php
    $increment = 100;
@endphp


@extends('layouts.app')

@section('title')
    Go-Sinau | Detail Mentor {{ $users->name }} 
@endsection

@section('content')
    <div class="container mx-auto px-24">

        <div class="py-8">
            <div class="py-4 text-gray-800">
                <h1 class="font-bold text-4xl py-4">
                    Profile Pengajar
                </h1>
            </div>
            <div data-aos="fade-right" data-aos-delay="200" class="grid grid-cols-2 bg-gray-100 rounded-2xl p-4 my-6 w-8/12">
                <div class="col-span-1">
                    <img class="rounded-full mx-auto" src="{{ asset('/storage/'. $users->image) }}" alt="Gambar Profile" style="width: 280px;">
                </div>
                <div class="col-span-1 text-lg">
                    <h1>{{ $users->description }}</h1>
                </div>
                <div class="text-base py-4">
                    <div class="text-base py-4 text-center">
                        <h1 class="font-bold text-xl">{{ $users->name }}</h1>
                        <p class="text-gray-500">{{ $users->title }}</p>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="flex gap-4 text-gray-800 py-14">
            <a href="#" class="shadow text-lg font-bold px-14 py-4 hover:bg-blue-900 hover:text-white border-2 border-blue-900 rounded-full">Kelas</a>
            <a href="#" class="shadow text-lg font-bold px-14 py-4 hover:bg-blue-900 hover:text-white border-2 border-blue-900 rounded-full">Keahlian</a>
            <a href="#" class="shadow text-lg font-bold px-14 py-4 hover:bg-blue-900 hover:text-white border-2 border-blue-900 rounded-full">Reviews</a>
        </div>
        
        <div class="pb-32">
            <div class="flex flex-wrap justify-around p-4 text-gray-100">
                @forelse ($classes as $class)
                    <a href="{{ route('class_detail', $class->id) }}" class="transform hover:scale-105">
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
@endsection