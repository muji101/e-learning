@php
    $increment = 100;
@endphp


@extends('layouts.app')

@section('title')
    Go-Sinau Class Mentor Page
@endsection

@section('content')
    <div class="container mx-auto px-24">

        <div class="py-8">
            <div class="py-4 text-white">
                <h1 class="font-bold text-4xl py-4">
                    Profile Pengajar
                </h1>
            </div>
            <div data-aos="fade-right" data-aos-delay="200" class="grid grid-cols-2 bg-gray-100 rounded-2xl p-4 my-6 w-8/12">
                <div class="col-span-1">
                    <img class="" src="{{ asset('/images/undraw_programming_2svr.svg') }}" alt="" style="width: 480px;">
                </div>
                <div class="col-span-1 pl-4 text-lg">
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
        

        <div class="flex gap-4 text-white py-14">
            <a href="#" class="shadow text-lg font-bold px-14 py-4 hover:bg-blue-700 rounded-full">Kelas</a>
            <a href="#" class="shadow text-lg font-bold px-14 py-4 hover:bg-blue-700 rounded-full">Keahlian</a>
            <a href="#" class="shadow text-lg font-bold px-14 py-4 hover:bg-blue-700 rounded-full">Reviews</a>
        </div>
        
        <div class="pb-32">
            <div class="flex flex-wrap justify-around p-4 text-gray-100">
                @forelse ($classes as $class)
                    <a href="{{ route('class_detail', $class->id) }}">
                        <div data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                            <img class="w-full rounded-xl" src="{{ asset('/storage/'.$class->photo) }}" alt="">
                            <div class="mt-4 h-1/3 border-b-2">
                                <h1 class="text-xl font-bold pb-3">{{ $class->name }}</h1>
                                <p>{{ $class->title }}</p>
                            </div>
                            <p class="italic py-1 text-gray-800">{{ $class->category->name }}</p>
                            <div class="text-center">
                                <h1 class="text-xl text-gray-800 font-bold">{{ $class->video->count() }} Materi</h1>
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