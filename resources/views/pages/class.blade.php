@extends('layouts.app')

@section('title')
    Go-Sinau Class Page
@endsection

@section('content')
<div class="container mx-auto px-24">
        
    <!-- kategori -->
    <div class="py-24">
        <div class="">
            <h1 class="font-bold text-4xl text-gray-100">
                Kategori
            </h1>
        </div>
        <div class="flex flex-wrap justify-evenly py-14 text-gray-100">
            <div data-aos="fade-right" data-aos-delay="200" class=" bg-blue-900 flex rounded-2xl p-4 my-6 w-5/12">
                <div class="">
                    <img class="" src="/images/undraw_programming_2svr.svg" alt="" style="width: 280px;">
                </div>
                <div class="pl-4 w-5/12">
                    <h1 class="font-bold text-lg border-b-2">Code</h1>
                    <div class="h-40">
                        <p class="py-4">Programmer adalah keahlian yang sangat dibutuhkan di era Modern sekarang ini.</p>
                    </div>
                    <div class="text-xl font-bold text-gray-800 border-t-2 pt-1">
                        <h1>19 Kelas</h1>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-delay="200" class=" bg-blue-900 flex rounded-2xl p-4 my-6 w-5/12">
                <div class="">
                    <img class="" src="/images/undraw_designer_life_w96d.svg" alt="" style="width: 280px;">
                </div>
                <div class="px-4 w-5/12">
                    <h1 class="font-bold text-lg border-b-2">Design</h1>
                    <div class="h-40">
                        <p class="py-4">Tidak hanya di bidang teknologi saja Designer sangat di butuhkan di berbagai industri.</p>
                    </div>
                    <div class="text-xl font-bold text-gray-800 border-t-2 pt-1">
                        <h1>10 Kelas</h1>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-delay="200" class=" bg-blue-900 flex rounded-2xl p-4 my-6 w-5/12">
                <div class="">
                    <img class="" src="/images/undraw_Updated_resume_re_q1or.svg" alt="" style="width: 280px;">
                </div>
                <div class="px-4 w-5/12">
                    <h1 class="font-bold text-lg border-b-2">Soft Skill</h1>
                    <div class="h-40">
                        <p class="py-4">Tidak hanya di bidang teknologi saja Designer sangat di butuhkan di berbagai industri.</p>
                    </div>
                    <div class="text-xl font-bold text-gray-800 border-t-2 pt-1">
                        <h1>16 Kelas</h1>
                    </div>
                </div>
            </div><div data-aos="fade-left" data-aos-delay="200" class=" bg-blue-900 flex rounded-2xl p-4 my-6 w-5/12">
                <div class="">
                    <img class="" src="/images/undraw_Marketing_re_7f1g.svg" alt="" style="width: 280px;">
                </div>
                <div class="px-4 w-5/12">
                    <h1 class="font-bold text-lg border-b-2">Marketing</h1>
                    <div class="h-40">
                        <p class="py-4">Tidak hanya di bidang teknologi saja Designer sangat di butuhkan di berbagai industri.</p>
                    </div>
                    <div class="text-xl font-bold text-gray-800 border-t-2 pt-1">
                        <h1>6 Kelas</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- view with category -->
    <div class="pb-14">
        <div class="py-4">
            <h1 class="text-4xl font-semibold text-gray-100">Pilih Berdasarkan</h1>
        </div>
        <div class="flex text-xl font-bold gap-8 text-gray-100 pt-8">
            <a href="#">Semua</a>
            <a href="#">Code</a>
            <a href="#">Design</a>
            <a href="#">Marketing</a>
            <a href="#">Soft Skill</a>
        </div>
    </div>

    <!-- rekomendasi kelas -->
    <div class="pb-32">
        <div class="flex flex-wrap justify-around p-4 text-gray-100">
            <div data-aos="fade-up" data-aos-delay="200" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                <div class="">
                    <img class="w-full h-72" src="/images/undraw_programmer_imem.svg" alt="">
                </div>
                <div class="my-6 h-1/3 border-b-2">
                    <h1 class="text-xl font-bold pb-3">Eloquent ORM Laravel</h1>
                    <p>Eloquent adalah salah satu fitur di laravel, fitur ini untuk mengelola sebuah data yang ada pada database, menjadi sangat mudah.</p>
                </div>
                <div class="text-center pt-4">
                    <h1 class="text-xl text-gray-800 font-bold">21 Materi</h1>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                <div class="">
                    <img class="w-full h-72" src="/images/undraw_Character_drawing_ii11.svg" alt="">
                </div>
                <div class="my-6 h-1/3 border-b-2">
                    <h1 class="text-xl font-bold pb-3">UX Brainstorming dengan InVision App  </h1>
                    <p>Mempelajari metode UX Brainstorming untuk membuat sebuah fitur pada aplikasi mobile yang diputuskan oleh beberapa divisi utama seperti Developer, Designer, Business Owner, dan Customer Support. </p>
                </div>
                <div class="text-center pt-4">
                    <h1 class="text-xl text-gray-800 font-bold">21 Materi</h1>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                <div class="">
                    <img class="w-full h-72" src="/images/undraw_Marketing_re_7f1g.svg" alt="">
                </div>
                <div class="my-6 h-1/3 border-b-2">
                    <h1 class="text-xl font-bold pb-3">E Trello Project Management</h1>
                    <p>Manajemen projek sangatlah penting untuk dilakukan ketika bekerja sendirian ataupun bersama dengan tim. Manfaat utamanya adalah projek dapat terorganisir dengan baik dan keep on track.</p>
                </div>
                <div class="text-center pt-4">
                    <h1 class="text-xl text-gray-800 font-bold">21 Materi</h1>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                <div class="">
                    <img class="w-full h-72" src="/images/undraw_programmer_imem.svg" alt="">
                </div>
                <div class="my-6 h-1/3 border-b-2">
                    <h1 class="text-xl font-bold pb-3">Eloquent ORM Laravel</h1>
                    <p>Eloquent adalah salah satu fitur di laravel, fitur ini untuk mengelola sebuah data yang ada pada database, menjadi sangat mudah.</p>
                </div>
                <div class="text-center pt-4">
                    <h1 class="text-xl text-gray-800 font-bold">21 Materi</h1>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                <div class="">
                    <img class="w-full h-72" src="/images/undraw_Character_drawing_ii11.svg" alt="">
                </div>
                <div class="my-6 h-1/3 border-b-2">
                    <h1 class="text-xl font-bold pb-3">UX Brainstorming dengan InVision App  </h1>
                    <p>Mempelajari metode UX Brainstorming untuk membuat sebuah fitur pada aplikasi mobile yang diputuskan oleh beberapa divisi utama seperti Developer, Designer, Business Owner, dan Customer Support. </p>
                </div>
                <div class="text-center pt-4">
                    <h1 class="text-xl text-gray-800 font-bold">21 Materi</h1>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                <div class="">
                    <img class="w-full h-72" src="/images/undraw_Marketing_re_7f1g.svg" alt="">
                </div>
                <div class="my-6 h-1/3 border-b-2">
                    <h1 class="text-xl font-bold pb-3">E Trello Project Management</h1>
                    <p>Manajemen projek sangatlah penting untuk dilakukan ketika bekerja sendirian ataupun bersama dengan tim. Manfaat utamanya adalah projek dapat terorganisir dengan baik dan keep on track.</p>
                </div>
                <div class="text-center pt-4">
                    <h1 class="text-xl text-gray-800 font-bold">21 Materi</h1>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                <div class="">
                    <img class="w-full h-72" src="/images/undraw_programmer_imem.svg" alt="">
                </div>
                <div class="my-6 h-1/3 border-b-2">
                    <h1 class="text-xl font-bold pb-3">Eloquent ORM Laravel</h1>
                    <p>Eloquent adalah salah satu fitur di laravel, fitur ini untuk mengelola sebuah data yang ada pada database, menjadi sangat mudah.</p>
                </div>
                <div class="text-center pt-4">
                    <h1 class="text-xl text-gray-800 font-bold">21 Materi</h1>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                <div class="">
                    <img class="w-full h-72" src="/images/undraw_Character_drawing_ii11.svg" alt="">
                </div>
                <div class="my-6 h-1/3 border-b-2">
                    <h1 class="text-xl font-bold pb-3">UX Brainstorming dengan InVision App  </h1>
                    <p>Mempelajari metode UX Brainstorming untuk membuat sebuah fitur pada aplikasi mobile yang diputuskan oleh beberapa divisi utama seperti Developer, Designer, Business Owner, dan Customer Support. </p>
                </div>
                <div class="text-center pt-4">
                    <h1 class="text-xl text-gray-800 font-bold">21 Materi</h1>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" class="w-96 p-4 bg-blue-900 rounded-2xl shadow-lg mt-14">
                <div class="">
                    <img class="w-full h-72" src="/images/undraw_Marketing_re_7f1g.svg" alt="">
                </div>
                <div class="my-6 h-1/3 border-b-2">
                    <h1 class="text-xl font-bold pb-3">E Trello Project Management</h1>
                    <p>Manajemen projek sangatlah penting untuk dilakukan ketika bekerja sendirian ataupun bersama dengan tim. Manfaat utamanya adalah projek dapat terorganisir dengan baik dan keep on track.</p>
                </div>
                <div class="text-center pt-4">
                    <h1 class="text-xl text-gray-800 font-bold">21 Materi</h1>
                </div>
            </div>
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