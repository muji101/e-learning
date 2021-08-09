@php
    $increment = 100;
@endphp

@extends('layouts.app')

@section('title')
    Go-Sinau | Class Page Join
@endsection

@section('content')
<div class="container mx-auto px-2 md:px-24">
    <!-- start learning -->
    <div class="py-4 md:py-16 text-gray-800">
        <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="200" class="text-center pt-4 px-2 md:pt-8 md:px-4">
            <img src="{{ asset('/images/success_join.svg') }}" alt="" class="w- w-1/2 mx-auto">
            <div class="text-lg md:text-4xl font-semibold py-1 md:py-6">
                <h1>Happy Learning </h1>
            </div>
            <div class="w-64 md:w-96 mx-auto">
                <p class="text-base">
                    Silahkan mempelajari materi kelas yang telah kami
                    design dengan baik untuk mencapai goals 
                </p>
            </div>
            <div class="py-6 md:py-14">
                <form method="POST" action="{{ route('class_join',[$classes->id, isset($classes->video->first()->id) ? $classes->video->first()->id : $classes->user->id]) }}">
                {{-- <form method="POST" action="{{ route('class_join',[$classes->id, $classes->video->first()->id]) }}"> --}}
                    @csrf
                    @method("POST")
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="class_id" value="{{ $classes->id }}">
                    <button class="bg-blue-900 text-md md:text-lg font-bold px-3 py-2 md:px-6 md:py-3 rounded-full shadow-xl text-white">Mulai Belajar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection