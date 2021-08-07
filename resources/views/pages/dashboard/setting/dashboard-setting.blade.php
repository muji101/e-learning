@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau|Settings')

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
                                            <form action="{{ route('password-update', Auth::user()->id) }}" enctype="multipart/form-data" method="POST" class="form form-vertical">
                                                @csrf
                                                @method("POST")
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="">
                                                                <img class="img-thumbnail" src="{{ asset('storage/'.Auth::user()->image) }}" alt="Belum Ada Gambar profile">
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <label class="form-label">Ganti Photo</label>
                                                                <div class="form-file">
                                                                    <input type="file" name="image" class="form-file-input">
                                                                    <label class="form-file-label" for="customFile">
                                                                        <span class="form-file-text">Choose file...</span>
                                                                        <span class="form-file-button">Browse</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                                {{-- <input type="text" class="form-control" placeholder="Input Your Title" id="title-icon" name="title" value="{{ Auth::user()->title }}"> --}}

                                                                <select name="title" class="form-select form-control" id="inputGroupSelect01">
                                                                    <option value="Lifetime Learner" disabled="" selected>Pilih Keahlian</option>
                                                                    <option value="UX Designer"{{ Auth::user()->title === 'UX Designer'? 'selected': '' }}>UX Designer</option>
                                                                    <option value="UI Designer" {{ Auth::user()->title === 'UI Designer'? 'selected': '' }}>UI Designer</option>
                                                                    <option value="Full-Stack Developer" {{ Auth::user()->title === 'Full-Stack Developer'? 'selected': '' }}>Full-Stack Developer</option>
                                                                    <option value="Front-End Developer" {{ Auth::user()->title === 'Front-End Developer'? 'selected': '' }}>Front-End Developer</option>
                                                                    <option value="Back-End Developer" {{ Auth::user()->title === 'Back-End Developer'? 'selected': '' }}>Back-End Developer</option>
                                                                    <option value="Product Designer" {{ Auth::user()->title === 'Product Designer'? 'selected': '' }}>Product Designer</option>
                                                                    <option value="Mobile App Developer" {{ Auth::user()->title === 'Mobile App Developer'? 'selected': '' }}>Mobile App Developer</option>
                                                                    <option value="Lifetime Learner" {{ Auth::user()->title === 'Lifetime Learner'? 'selected': '' }}>Lifetime Learner</option>
                                                                    <option value="Full-Stack JavaScript Developer" {{ Auth::user()->title === 'Full-Stack JavaScript Developer'? 'selected': '' }}>Full-Stack JavaScript Developer</option>
                                                                    <option value="Quality Assurance" {{ Auth::user()->title === 'Quality Assurance'? 'selected': '' }}>Quality Assurance</option>
                                                                    <option value="Data Scientist" {{ Auth::user()->title === 'Data Scientist'? 'selected': '' }}>Data Scientist</option>
                                                                    <option value="Project Manager" {{ Auth::user()->title === 'Project Manager'? 'selected': '' }}>Project Manager</option>
                                                                    <option value="Illustration Designer" {{ Auth::user()->title === 'Illustration Designer'? 'selected': '' }}>Illustration Designer</option>
                                                                    <option value="Logo Designer" {{ Auth::user()->title === 'Logo Designer'? 'selected': '' }}>Logo Designer</option>
                                                                    <option value="Network Engineer" {{ Auth::user()->title === 'Network Engineer'? 'selected': '' }}>Network Engineer</option>
                                                                    </select>
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
                                                    {{-- <div class="col-12">
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
                                                    </div> --}}
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
                                            <form action="{{ route('password-updatePass', Auth::user()->id) }}" method="POST" class="form form-vertical">
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