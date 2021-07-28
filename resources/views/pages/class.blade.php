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
    <div class="py-24">
        <div 
        data-aos="fade-right"
        data-aos-offset="100"
        data-aos-easing="ease-in-sine"
        class="font-bold my-5 relative text-gray-100 text-4xl">
            <div class="bg-blue-900 rounded-bl-full rounded-br-full w-1/3" style="height:10px"></div>
            <div class="absolute" style="bottom: -5px">Semua Kategori</div>
        </div>
        <div class="flex flex-wrap justify-evenly py-14 text-gray-100">
            @foreach ($categories as $category)
            <div data-aos="fade-right" data-aos-delay="{{ $increment += 100 }}" class="w-5/12">
                    <a href="{{ route('categories-detail', $category->name) }}">
                        <div class="bg-blue-900 flex rounded-2xl p-4 my-6">
                            <div class="">
                                <img class="" src="{{ Storage::url($category->photo) }}" alt="" style="width: 280px;">
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
        </div>
    </div>

    <!-- view with category -->
    <div class="pb-14">
        <div 
        data-aos="fade-right"
        data-aos-offset="100"
        data-aos-easing="ease-in-sine"
        class="font-bold my-5 relative text-gray-100 text-4xl">
            <div class="bg-blue-900 rounded-bl-full rounded-br-full w-1/3" style="height:10px"></div>
            <div class="absolute" style="bottom: -5px">Pilih Berdasarkan</div>
        </div>
        <div class="flex text-xl font-bold gap-8 text-gray-100 pt-8 overflow-hidden">
            <a data-aos="fade-right" data-aos-delay="400" href="{{ route('categories') }}">Semua</a>
            @foreach ($categories as $category)
                <a 
                data-aos="fade-right" data-aos-delay="{{ $increment += 100 }}" 
                href="{{ route('categories-detail', $category->name) }}">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>

    <!-- rekomendasi kelas -->
    <div class="pb-32">
        <div class="flex flex-wrap justify-around p-4 text-gray-100">
            @forelse ($classes as $class)
                <a href="{{ route('class_detail', $class->id) }}">
                    <div data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                        <div class="">
                            <img class="w-full" src="{{ Storage::url($class->photo) }}" alt="">
                        </div>
                        <div class="mt-4 h-1/3 border-b-2">
                            <h1 class="text-xl font-bold pb-3">{{ $class->name }}</h1>
                            <p>{{ $class->title }}</p>
                        </div>
                        <p class="italic py-1 text-gray-800">{{ $class->category->name }}</p>
                        <div class="text-center pb-14">
                            <h1 class="text-xl text-gray-800 font-bold">{{ $class->video->count() }} Materi</h1>
                        </div>
                    </div>
                </a>
            @empty
                <h1 class="bg-gray-400 text-gray-800 text-2xl py-4 px-10 mt-24 rounded-full">Kelas Tidak Ditemukan!</h1>
            @endforelse
        </div>
    </div>

    <!-- apa kata alumni -->
    <div class="bg-gray-700 rounded-3xl text-gray-100 py-16 mb-24">
        <div class="text-center py-8">
            <div class="text-4xl font-semibold">
                <h1>Apa Kata Para Alumni</h1>
            </div>
            <!-- <div class="bg-white w-20 h-1 rounded-lg m-auto my-4 animate-ping"></div> -->
        </div>
        <div class="splide" data-aos="fade-up">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 px-4 md:px-32 text-center items-center">
                            <div class=" col-span-1 md:col-span-2 md:flex md:items-center md:ml-0">
                                <div class="text-lg  text-center lg:text-left">
                                    <div class="text-xl">
                                        “Our dedicated patient engagement app and
                                    web portal allow you to access information instantaneously (no tedeous form, long calls, 
                                    or administrative hassle) and securely”
                                    </div>
                                    <div class="py-4 md:text-left">
                                        <h1 class="font-bold text-2xl">Edward Newgate</h1>
                                        <h4 class="font-bold text-lg">Founder Circle</h4>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-span-1 m-auto mr-0">
                                <img src="https://picsum.photos/200/200" alt="" class="w-36 md:m-0 md:w-52 rounded-2xl">
                            </div>
                            
                            
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 px-4 md:px-32 text-center items-center">
                            <div class=" col-span-1 md:col-span-2 md:flex md:items-center md:ml-0">
                                <div class="text-lg  text-center lg:text-left">
                                    <div class="text-xl">
                                        “Our dedicated patient engagement app and
                                    web portal allow you to access information instantaneously (no tedeous form, long calls, 
                                    or administrative hassle) and securely”
                                    </div>
                                    <div class="py-4 md:text-left">
                                        <h1 class="font-bold text-2xl">Edward Newgate</h1>
                                        <h4 class="font-bold text-lg">Founder Circle</h4>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-span-1 m-auto mr-0">
                                <img src="https://picsum.photos/200/200" alt="" class="w-36 md:m-0 md:w-52 rounded-2xl">
                            </div>
                            
                            
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 px-4 md:px-32 text-center items-center">
                            <div class=" col-span-1 md:col-span-2 md:flex md:items-center md:ml-0">
                                <div class="text-lg  text-center lg:text-left">
                                    <div class="text-xl">
                                        “Our dedicated patient engagement app and
                                    web portal allow you to access information instantaneously (no tedeous form, long calls, 
                                    or administrative hassle) and securely”
                                    </div>
                                    <div class="py-4 md:text-left">
                                        <h1 class="font-bold text-2xl">Edward Newgate</h1>
                                        <h4 class="font-bold text-lg">Founder Circle</h4>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-span-1 m-auto mr-0">
                                <img src="https://picsum.photos/200/200" alt="" class="w-36 md:m-0 md:w-52 rounded-2xl">
                            </div>
                            
                            
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection