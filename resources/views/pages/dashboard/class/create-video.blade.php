@php
    //isset buat ngecek data kalau ada true kalau tidak false
    $isEdit = isset($videos);
    
    $title = $isEdit ? 'Edit Video' : 'Create Video';
    $title1 = $isEdit ? 'Edit Your Video' : 'Create Your Video';

    $route = $isEdit ? route('video-update', $videos->id) : route('video-store');

    $button = $isEdit ? 'Update' : 'Create';
@endphp
@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $title }}</h3>
                <p class="text-subtitle text-muted">Please input with valid data so that the application does not error</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>

    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">{{ $title1 }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ $route }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                                @csrf
                                @method('POST')
                                <div class="form-body">
                                    <div class="row">
                                        <input type="hidden" name="chapter_id" value="{{ $isEdit ? $videos->chapter_id : $chapters->id }}">
                                        <input type="hidden" name="class_id" value="{{ $isEdit ? $videos->course->id : $classes->id }}">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Name :</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="title" placeholder="Input title video" id="first-name-icon" value="{{ $isEdit ? $videos->title : '' }}">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">URL :</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="url" placeholder="Input URL video" id="first-name-icon" value="{{ $isEdit ? $videos->url : '' }}">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">{{ $button }}</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection

