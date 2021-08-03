@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau|Class')

@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>My Class</h3>
                <p class="text-subtitle text-muted">Daftar kelas anda silahkan click detail untuk info selanjutnya!.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Class</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        {{-- <div class="card"> --}}
            {{-- <div class="card-header fw-bold fs-4">
                Pilih Berdasarkan
            </div> --}}
            {{-- <div class="card-body"> --}}
                {{-- <div class="d-flex fs-5">
                    <a class="pe-2" href="{{ route('myclass') }}">All</a>
                    @foreach ($categories as $category)
                        <a class="px-2" href="{{ route('myclass_category', $category->name) }}">{{ $category->name }}</a>
                    @endforeach
                </div> --}}
                <div class="d-flex flex-wrap">
                    @forelse ($joins as $join)
                    <a href="{{ route('class_detail', $join->course->id) }}">
                        <div class="card mx-2" style="width: 400px">
                            <div class="bg-primary">
                                <img src="{{ asset('storage/'.$join->course->photo) }}" style="width: 400px; height: 260px" alt="Ini gambar">
                                <div class="p-2 text-white">
                                    <p class="fs-5 border-bottom mb-0 border-white">{{ $join->course->name }}</p>
                                    <p class="fst-italic mb-0">{{ $join->course->category->name }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @empty
                        <h1 class="bg-gray-400 text-gray-800 text-2xl py-4 px-10 mt-24 rounded-full">Kelas Tidak Ditemukan!</h1>
                    @endforelse
                </div>

            {{-- </div> --}}
        {{-- </div> --}}

    </section>
</div>
@endsection