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
        <div class="card">
            <div class="card-header fw-bold fs-4">
                Pilih Berdasarkan
            </div>
            <div class="card-body">
                <div class="d-flex fs-5">
                    <a class="pe-2" href="#">All</a>
                    @foreach ($categories as $category)
                        <a class="px-2" href="#">{{ $category->name }}</a>
                    @endforeach
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="card w-25 bg-primary my-4">
                        <div class="card-body">
                            <div class="">
                                <img src="{{ asset('/images/undraw_Character_drawing_ii11.svg') }}" alt="Ini gambar" style="width: 260px">
                            </div>
                            <div class="text-white pt-3">
                                <p class="fs-3 border-bottom border-white">Laravel 8</p>
                                <p class="">Code</p>
                            </div>
                        </div>
                    </div>
                    <div class="card w-25 bg-primary my-4">
                        <div class="card-body">
                            <div class="">
                                <img src="{{ asset('/images/undraw_Character_drawing_ii11.svg') }}" alt="Ini gambar" style="width: 260px">
                            </div>
                            <div class="text-white pt-3">
                                <p class="fs-3 border-bottom border-white">Laravel 8</p>
                                <p class="">Code</p>
                            </div>
                        </div>
                    </div>
                    <div class="card w-25 bg-primary my-4">
                        <div class="card-body">
                            <div class="">
                                <img src="{{ asset('/images/undraw_Character_drawing_ii11.svg') }}" alt="Ini gambar" style="width: 260px">
                            </div>
                            <div class="text-white pt-3">
                                <p class="fs-3 border-bottom border-white">Laravel 8</p>
                                <p class="">Code</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection