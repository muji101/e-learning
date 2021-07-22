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
                    <img class="" src="/images/undraw_programming_2svr.svg" alt="" style="width: 480px;">
                </div>
                <div class="col-span-1 pl-4 text-lg">
                    <h1>Lahir di Batang Jawa Tengah Juli 2000, merupakan asli keturunan jawa dan dia adalah Full Stack Developer Di PT.Mahir Techno Indonesia sejak Desember 2021.</h1>
                </div>
                <div class="text-base py-4">
                    <div class="text-base py-4 text-center">
                        <h1 class="font-bold text-xl">Muji Kuwat</h1>
                        <p class="text-gray-500">Full Stack Developer</p>
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
            <div class="flex flex-wrap justify-around p-4">
                <div data-aos="fade-up" data-aos-delay="200" class="w-96 p-4 bg-gray-50 rounded-2xl shadow-lg mt-14">
                    <div class="">
                        <img class="w-full h-72" src="/images/undraw_programmer_imem.svg" alt="">
                    </div>
                    <div class="py-2">
                        <h1 class="text-xl font-bold pb-3">Eloquent ORM Laravel</h1>
                        <p>Eloquent adalah salah satu fitur di laravel, fitur ini untuk mengelola sebuah data yang ada pada database, menjadi sangat mudah.</p>
                    </div>
                    <div class="py-2 text-center">
                        <h1 class="text-xl text-blue-500 font-bold">21 Materi</h1>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="w-96 p-4 bg-gray-50 rounded-2xl shadow-lg mt-14">
                    <div class="">
                        <img class="w-full h-72" src="/images/undraw_Character_drawing_ii11.svg" alt="">
                    </div>
                    <div class="py-2">
                        <h1 class="text-xl font-bold pb-3">UX Brainstorming dengan InVision App  </h1>
                        <p>Mempelajari metode UX Brainstorming untuk membuat sebuah fitur pada aplikasi mobile yang diputuskan oleh beberapa divisi utama seperti Developer, Designer, Business Owner, dan Customer Support. </p>
                    </div>
                    <div class="py-2 text-center">
                        <h1 class="text-xl text-blue-500 font-bold">21 Materi</h1>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="w-96 p-4 bg-gray-50 rounded-2xl shadow-lg mt-14">
                    <div class="">
                        <img class="w-full h-72" src="/images/undraw_Marketing_re_7f1g.svg" alt="">
                    </div>
                    <div class="py-2">
                        <h1 class="text-xl font-bold pb-3">E Trello Project Management</h1>
                        <p>Manajemen projek sangatlah penting untuk dilakukan ketika bekerja sendirian ataupun bersama dengan tim. Manfaat utamanya adalah projek dapat terorganisir dengan baik dan keep on track.</p>
                    </div>
                    <div class="py-2 text-center">
                        <h1 class="text-xl text-blue-500 font-bold">21 Materi</h1>
                    </div>
                </div>
            </div>
        </div>

        


    </div>
@endsection