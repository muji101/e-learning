@php
    $increment = 100;
@endphp

@extends('layouts.app')

@section('title')
    Go-Sinau Home Page
@endsection

@section('content')
    <!-- jarallax banner -->
    <div class="relative">
        <div  data-jarallax-video="https://youtu.be/mbyC-4ufrG4" class="jarallax">
            <div class="bg-black w-full h-full opacity-60"></div>
        </div>
        <div class="py-40 text-center text-white absolute top-0 left-1/4 ml-28">
            <h1 class="text-4xl font-extrabold">Semakin Mudah untuk <br> Belajar dimasa Pandemi</h1>
            <p class="fs-3 text-warning px-3 py-8"> GO-Sinau menyiapkan Generasi Milennial mengakselerasi Karir <br>
                di Keahlian bidang Digital untuk siap berkarir di Masa depan
            </p>
            <a href="#ready" class="bg-blue-900 py-4 px-8 rounded-full font-bold hover:bg-blue-800">Cari tahu Caranya</a>
        </div>
    </div>


<div class="container mx-auto px-24">
    
    <!-- kategori -->
    <div class="pt-24">
        <div 
        data-aos="fade-right"
        data-aos-offset="100"
        data-aos-easing="ease-in-sine"
        class="font-bold my-5 relative text-gray-800 text-2xl">
            <div class="bg-blue-900 rounded-bl-full rounded-br-full w-4/12" style="height:7px"></div>
            <div class="absolute" style="bottom: -5px">Kategori Pilihan Untuk Anda</div>
        </div>
        <div class="flex flex-wrap justify-evenly py-14">
            @forelse ($categories as $category)
                <div data-aos="fade-right" data-aos-delay="{{ $increment += 100 }}" class=" border-2 hover:border-blue-900 flex rounded-2xl p-4 my-6 w-5/12">
                    <div class="">
                        <img class="" src="{{ asset('/storage/'.$category->photo) }}" alt="" style="width: 280px;">
                    </div>
                    <div class="pl-4 w-5/12 text-gray-800">
                        <h1 class="font-bold text-lg">{{ $category->name }}</h1>
                        <p class="py-4">{{ $category->description }}</p>
                        <div class="pt-24">
                            <a class="text-blue-900" href="{{ route('categories-detail', $category->name) }}">pelajari lebih lanjut</a>
                        </div>
                    </div>
                </div>
            @empty
                <h1 class="text-white text-center text-2xl py-2 px-4 bg-blue-900 rounded-full">Belum ada kategori tersedia!</h1>
            @endforelse
        </div>
    </div>

    <!-- metode -->
    <div class="py-24 text-gray-100">
        <div 
        data-aos="fade-right"
        data-aos-offset="100"
        data-aos-easing="ease-in-sine"
        class="font-bold my-5 relative text-gray-800 text-2xl">
            <div class="bg-blue-900 rounded-bl-full rounded-br-full w-6/12" style="height:7px"></div>
            <div class="absolute" style="bottom: -5px">Metode Belajar Lebih Mudah Dan Terarah</div>
        </div>
        <div class="flex justify-around py-14">
            <div data-aos="zoom-in-right" data-aos-delay="200" class="grid grid-cols-2 items-center">
                <div class="col-span-1">
                    <img src="{{ asset('/images/undraw_Youtube_tutorial_re_69qc.svg') }}" alt="" style="width: 180px;" class="mx-auto">
                </div>
                <div class="col-span-1 px-2 text-gray-800">
                    <h1 class="text-xl font-bold pb-4">Kelas</h1>
                    <p class="count text-5xl font-bold">{{ $classes->count() }}</p>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-delay="200" class="grid grid-cols-2 items-center">
                <div class="col-span-1">
                    <img src="{{ asset('images/undraw_people_tax5.svg') }}" alt="" style="width: 180px;" class="mx-auto">
                </div>
                <div class="col-span-1 px-2 text-gray-800">
                    <h1 class="text-xl font-bold pb-4">Pengguna</h1>
                    <p class="count text-5xl font-bold">{{ $users->count() }}</p>
                </div>
            </div>
            <div data-aos="zoom-in-left" data-aos-delay="200" class="grid grid-cols-2 items-center">
                <div class="col-span-1">
                    <img src="{{ asset('/images/undraw_reviews_lp8w.svg') }}" alt="" style="width: 180px;" class="mx-auto">
                </div>
                <div class="col-span-1 px-2 text-gray-800">
                    <h1 class="text-xl font-bold pb-4">Reviews</h1>
                    <p class="count text-5xl font-bold">{{ $reviews->count() }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- apa kata alumni -->
    {{-- <div class="bg-blue-900 rounded-3xl text-gray-100 py-16 mb-24">
        <div class="text-center py-8">
            <div class="text-4xl font-semibold">
                <h1>Apa Kata Para Alumni</h1>
            </div>
            <!-- <div class="bg-white w-20 h-1 rounded-lg m-auto my-4 animate-ping"></div> -->
        </div>
        <div class="splide" data-aos="fade-up">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($reviews as $review)
                        <li class="splide__slide">
                            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 px-4 md:px-32 text-center items-center">
                                <div class=" col-span-1 md:col-span-2 md:flex md:items-center md:ml-0">
                                    <div class="text-lg  text-center lg:text-left">
                                        <div class="text-xl">
                                            "{{ $review->content }}"
                                        </div>
                                        <div class="py-4 md:text-left">
                                            <h1 class="font-bold text-2xl">{{ $review->user->name }}</h1>
                                            <h4 class="text-lg">{{ $review->user->title }}</h4>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-span-1 m-auto mr-0">
                                    <img src="https://picsum.photos/200/200" alt="" class="w-36 md:m-0 md:w-52 rounded-2xl">
                                </div>
                                
                                
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>


    </div> --}}

    <div class="py-4 sm:py-14">
        <div class="text-center">
            <h1 class="text-2xl font-bold">Trusted by Thousands of Happy Customer</h1>
            <p class="text-base py-2">These are the stories of our customers who have joined us with great pleasure when using this crazy feature.</p>
        </div>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($reviews as $review)
                    <li class="splide__slide">
                        <div class="flex py-14">
                            <div class="mx-auto py-8 px-8 border-2 bg-gray-50 border-blue-900 w-96 h-56 rounded-xl">
                                <div class="flex items-center justify-between">
                                    <img src="{{ asset('/storage/'.$review->user->image) }}" alt="" class="w-14 h-14 rounded-lg">
                                    <div class="px-4">
                                        <h1 class="text-lg font-bold">{{ $review->user->name }}</h1>
                                        <p class="text-sm">{{ $review->user->title }}</p>
                                    </div>
                                    <div class="inline-flex items-center">
                                        4.5
                                        <img class="w-4" src="{{ asset('images/star.png') }}" alt="">
                                    </div>
                                </div>
                                <p class="pt-2 text-base">“{{ $review->content }}”</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

    {{-- jarallax --}}
    <div data-jarallax data-speed="-0.2" class="jarallax my-16" style="height: 400px; background-image: url('https://source.unsplash.com/1920x1080/?design');">
    </div>
    
    

<div class="container mx-auto px-24">

    <!-- rekomendasi kelas -->
    <div class="py-24">
        <div class="text-center pt-8 px-4">
            <div 
            data-aos="fade-right"
            data-aos-offset="100"
            data-aos-easing="ease-in-sine"
            class="font-bold my-5 relative text-gray-800 text-2xl">
                <div class="bg-blue-900 rounded-bl-full rounded-br-full w-6/12" style="height:7px"></div>
                <div class="absolute" style="bottom: -5px">Rekomendasi Kelas Khusus Untuk Anda</div>
            </div>
        </div>
        <div class="flex flex-wrap justify-around pt-14">
            @forelse ($classesRecomend as $class)
                <a href="{{ route('class_detail', $class->id) }}" class="transform hover:scale-105">
                    <div data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}" class="w-96 p-4 bg-white rounded-2xl shadow-lg">
                        <div class="">
                            <img class="w-full rounded-2xl shadow-md" src="{{ asset('/storage/'.$class->photo) }}" alt="">
                        </div>
                        <div class="py-2 text-gray-700 border-b-2">
                            <h1 class="text-xl font-bold pb-3">{{ $class->name }}</h1>
                            <p>{{ $class->title }}</p>
                        </div>
                        <p class="italic text-blue-900">{{ $class->category->name }}</p>
                    </div>
                </a>
            @empty
                <h1 class="text-white text-center text-2xl py-2 px-4 bg-blue-900 rounded-full">Belum ada kelas tersedia!</h1>
            @endforelse
        </div>
    </div>
</div>

{{-- jarallax --}}
<div data-jarallax data-speed="-0.2" class="jarallax my-16" style="height: 400px ;background-image: url('https://source.unsplash.com/1920x1080/?coding');">
</div>

<div class="container mx-auto px-24">

    <!-- bergabung bersama kami -->
    <div class="py-16 text-gray-100">
        <div class="text-center pt-8 px-4">
            <div 
            data-aos="fade-right"
            data-aos-offset="100"
            data-aos-easing="ease-in-sine"
            class="font-bold my-5 relative text-gray-800 text-2xl">
                <div class="bg-blue-900 rounded-bl-full rounded-br-full w-6/12" style="height:7px"></div>
                <div class="absolute" style="bottom: -5px">Mengapa Harus Bergabung Bersama Kami?</div>
            </div>
        </div>
        <div class="flex flex-wrap justify-evenly gap-2 pt-14">
            <div data-aos="fade-up" data-aos-delay="100" class="p-4 rounded-2xl w-1/4 border-2 hover:border-blue-900 my-8">
                <div class="">
                    <img style="width: 140px; height: 200px;" src="{{ asset('/images/undraw_teaching_f1cm.svg') }}" alt="">
                </div>
                <div class="py-2 text-gray-800">
                    <h1 class="text-base font-bold py-2">Mentor Praktisi Berpengalaman</h1>
                    <p class="text-sm">Para Mentor di GO-Sinau adalah Praktisi Bersertifikasi dan Berpengalaman di berbagai Perusahaan berbasis Teknologi yang ada di Indonesia muapun Luar Negeri</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="p-4 rounded-2xl w-1/4 border-2 hover:border-blue-900 my-8">
                <div class="">
                    <img style="width: 140px; height: 200px;" src="{{ asset('/images/undraw_learning_2q1h.svg') }}" alt="">
                </div>
                <div class="py-2 text-gray-800">
                    <h1 class="text-base font-bold py-2">Metode belajar yang mudah dipahami</h1>
                    <p class="text-sm">Pembelajaran di GO-Sinau bisa untuk pemula yang bukan dari teknologi, maupun untuk anda yang sudah berpengalaman di perusahaan namun ingin meningkatkan skill</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="p-4 rounded-2xl w-1/4 border-2 hover:border-blue-900 my-8">
                <div class="">
                    <img style="width: 140px; height: 200px;" src="{{ asset('/images/undraw_lightbulb_moment_re_ulyo.svg') }}" alt="">
                </div>
                <div class="py-2 text-gray-800">
                    <h1 class="text-base font-bold py-2">Kurikulum sesuai kebutuhan industri 4.0</h1>
                    <p class="text-sm">Pembelajaran di GO-Sinau selalu memberikan yang terbaru berdasarkan kurikulum yang dibutuhkan industri saat ini sehingga pembelajaran mampu diterapkan secara langsung untuk peningkatan karir anda</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" class="p-4 rounded-2xl w-1/4 border-2 hover:border-blue-900 my-8">
                <div class="">
                    <img style="width: 140px; height: 200px;" src="{{ asset('/images/undraw_team_spirit_hrr4.svg') }}" alt="">
                </div>
                <div class="py-2 text-gray-800">
                    <h1 class="text-base font-bold py-2">Komunitas Antar Member</h1>
                    <p class="text-sm">Kenapa harus sendiri jika bisa berkembang bersama? Di GO-Sinau kamu bisa gabung ke komunitas belajar talenta digital dari seluruh penjuru di Indonesia</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="p-4 rounded-2xl w-1/4 border-2 hover:border-blue-900 my-8">
                <div class="">
                    <img style="width: 140px; height: 200px;" src="{{ asset('/images/undraw_certificate_343v.svg') }}" alt="">
                </div>
                <div class="py-2 text-gray-800">
                    <h1 class="text-base font-bold py-2">Sertifikat Penyelesaian</h1>
                    <p class="text-sm">Kumpulkan Sertifikat setiap kamu berhasil menyelesaikan kelas di GO-Sinau. Jadi nilai tambah untuk dicantumkan di CVmu!</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="600" class="p-4 rounded-2xl w-1/4 border-2 hover:border-blue-900 my-8">
                <div class="">
                    <img style="width: 140px; height: 200px;" src="{{ asset('/images/undraw_Questions_re_1fy7.svg') }}" alt="">
                </div>
                <div class="py-2 text-gray-800">
                    <h1 class="text-base font-bold py-2">Tanya Jawab dengan Mentor Praktisi</h1>
                    <p class="text-sm">Mentor Praktisi siap membantumu kapanpun! Kamu bisa berinteraksi langsung saat pembelajaran maupun saat setelah pembelajaran di grup support yang diberikan</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ready learning -->
    <div id="ready" class="py-16 text-gray-800">
        <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="200" class="text-center pt-8 px-4">
            <img src="{{ asset('/images/undraw_press_play_bx2d.svg') }}" alt="" class="w-72 mx-auto">
            <div class="text-4xl font-semibold py-6">
                <h1>Siap Memulai Belajar Bersama Kami?</h1>
            </div>
            <div class="w-96 mx-auto">
                <p class="text-base">
                    Belajar langsung dari mentor berpengalaman di bidangnya tanpa batas waktu 
                </p>
            </div>
            <div class="py-14">
                <a href="{{ route('register') }}" class="bg-blue-900 py-4 px-8 rounded-full shadow-2xl font-bold hover:bg-blue-800 text-white">Daftar & Belajar Sekarang</a>
            </div>
        </div>
    </div>

</div>  
@endsection