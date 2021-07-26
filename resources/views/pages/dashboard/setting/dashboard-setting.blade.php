@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau|Settings')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Form Settings</h3>
                    <p class="text-subtitle text-muted">Masukkan informasi yang valid agar proses belajar lebih mudah </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <!-- Basic Vertical form layout section start -->
        <div class="col-md-12">
            {{-- <h5 class="card-title">Horizontal Navs</h5> --}}
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                        role="tab" aria-controls="home" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact"
                        role="tab" aria-controls="contact" aria-selected="false">Password</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                    aria-labelledby="home-tab">
                    {{-- edit Profile --}}
                    <section id="profile">
                        <div class="row match-height">
                            <div class="col-md-6 col-12 mx-auto">
                                <div class="card">
                                    <div class="card-header">
                                    <h4 class="card-title">Edit Informasi Profile</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form action="{{ route('password-update', Auth::user()->id) }}" method="POST" class="form form-vertical">
                                                @csrf
                                                @method("POST")
                                            <div class="form-body">
                                                <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="name-icon">Name</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" placeholder="Input Your Name" id="name-icon" name="name" value="{{ Auth::user()->name }}">
                                                            <div class="form-control-icon">
                                                                <i data-feather="user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    
                                                    <div class="form-group has-icon-left">
                                                        <label for="email-id-icon">Email</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" placeholder="Input Your Email" id="email-id-icon" name="email" value="{{ Auth::user()->email }}">
                                                            <div class="form-control-icon">
                                                                <i data-feather="mail"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">Mobile</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" placeholder="Input Your Mobile" id="mobile-id-icon" name="phone" value="{{ Auth::user()->phone }}">
                                                            <div class="form-control-icon">
                                                                <i data-feather="phone"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="title-icon">Title</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" placeholder="Input Your Title" id="title-icon" name="title" value="{{ Auth::user()->title }}">
                                                            <div class="form-control-icon">
                                                                <i data-feather="user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="description-icon">Description</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" placeholder="Input Your Description" id="description-icon" name="description" value="{{ Auth::user()->description }}">
                                                            <div class="form-control-icon">
                                                                <i data-feather="user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
                <div class="tab-pane fade" id="contact" role="tabpanel"
                    aria-labelledby="contact-tab">
                    {{-- edit pasword --}}
                    <section id="password">
                        <div class="row match-height">
                            <div class="col-md-6 col-12 mx-auto">
                                <div class="card">
                                    <div class="card-header">
                                    <h4 class="card-title">Edit Password Anda</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form action="{{ route('password-update', Auth::user()->id) }}" method="POST" class="form form-vertical">
                                                @csrf
                                                @method("POST")
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">Kata sandi saat ini</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control" placeholder="Password" id="current_password" name="current_password" value="{{ Auth::user()->password }}">
                                                                <div class="form-control-icon">
                                                                    <i data-feather="lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">Kata sandi baru</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control" placeholder="New Password" id="password" name="password">
                                                                <div class="form-control-icon">
                                                                    <i data-feather="lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">Kata sandi baru (konfirmasi)</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control" placeholder="Retry New Password" id="password_confirmation" name="password_confirmation">
                                                                <div class="form-control-icon">
                                                                    <i data-feather="lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
            </div>
        </div>
        
        <!-- // Basic Vertical form layout section end -->
    </div>    
@endsection