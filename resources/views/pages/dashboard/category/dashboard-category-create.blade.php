@php
    //isset buat ngecek data kalau ada true kalau tidak false
    $isEdit = isset($category);
    
    $title = $isEdit ? 'Edit Category' : 'Create Category';
    $title1 = $isEdit ? 'Edit Your Category' : 'Create Your Category';

    $route = $isEdit ? route('category-update', $category->id) : route('category-store');

    $button = $isEdit ? 'Update' : 'Create';
@endphp
@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Form {{ $title }}</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
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
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="name" placeholder="Input with icon left" id="first-name-icon" value="{{ $isEdit ? $category->name : '' }}">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                                                rows="3">{{ $isEdit ? $category->description : '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <label class="form-label">Upload Photo</label>
                                                <div class="form-file">
                                                    <input type="file" name="photo" class="form-file-input" id="customFile">
                                                    <label class="form-file-label" for="customFile">
                                                        <span class="form-file-text">Choose file...</span>
                                                        <span class="form-file-button">Browse</span>
                                                    </label>
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
    <!-- // Basic Vertical form layout section end -->


</div>
@endsection
