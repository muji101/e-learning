@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Eloquent ORM Laravel</h3>
            <p class="text-subtitle text-muted">Code</p>
        </div>
        <div class="py-4">
            <iframe class="w-100 vh-100" src="https://www.youtube.com/embed/auhRgeDB8-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="py-2">
            <span class="fs-3 border-4 border-bottom">Description</span>
            <p class="fs-5">
                Eloquent adalah salah satu fitur di laravel, fitur ini untuk mengelola sebuah data yang ada pada database, menjadi sangat mudah.
                Eloquent adalah salah satu fitur di laravel, fitur ini untuk mengelola sebuah data yang ada pada database, menjadi sangat mudah.
                Eloquent adalah salah satu fitur di laravel, fitur ini untuk mengelola sebuah data yang ada pada database, menjadi sangat mudah.
            </p>
        </div>


        <div class="py-4 fw-bold">
            <div class="row">
                <div class="col-6">
                    <div class="">
                        {{-- <a class="fs-5 btn btn-primary" href="#">Buat Chapter Video<i data-feather="plus" width="20"></i></a> --}}
                        <!-- Button trigger for login form modal -->
                        <button type="button" class="fs-5 btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#inlineForm">
                        Buat Chapter<i data-feather="plus" width="20"></i>
                        </button>

                        <!--create form Modal -->
                        <div class="modal fade text-left" id="inlineForm" tabindex="-1"
                            role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Create Chapter</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form action="#">
                                        <div class="modal-body">
                                            <label>Name: </label>
                                            <div class="form-group">
                                                <input type="text" placeholder="Name Chapter"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="button" class="btn btn-primary ml-1"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Submit</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- chapter --}}
                    <div class="p-2 card mt-2">
                        <div class="d-flex justify-content-between border-bottom border-2">
                            <a class="w-50 fs-5 text-black-50" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                1. Chapter 1
                                <i data-feather="chevron-down"></i>
                            </a>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Info
                                </button>
                                <div class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuButton">
                                    {{-- <a class="dropdown-item badge bg-success" href="#">Tambah</a> --}}
                                    <button type="button" class="dropdown-item badge bg-success" data-bs-toggle="modal"
                                    data-bs-target="#inlineForm1">
                                    video<i data-feather="plus" width="20"></i>
                                    </button>
            
                                    
                                    {{-- <a class="dropdown-item badge bg-primary" href="#">Edit</a> --}}
                                    <button type="button" class="dropdown-item badge bg-primary" data-bs-toggle="modal"
                                    data-bs-target="#inlineForm2">
                                    Edit<i data-feather="edit" width="20"></i>
                                    </button>
            
                                    
                                    <a class="dropdown-item badge bg-danger" href="#">Delete<i data-feather="trash"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="collapse ps-3" id="collapseExample">
                            <div class="my-1 d-flex justify-content-between">
                                <a class="fs-5  text-black-50" href="#">
                                    <div class="d-flex justify-content-center">
                                        <span class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <p class="ps-1 pt-0">Some placeholder content</p>
                                    </div>
                                </a>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Info
                                    </button>
                                    <div class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuButton">
                                        {{-- <a class="dropdown-item badge bg-primary" href="#">Edit</a> --}}
                                        <button type="button" class="dropdown-item badge bg-primary" data-bs-toggle="modal"
                                        data-bs-target="#inlineForm3">
                                        Edit<i data-feather="edit" width="20"></i>
                                        </button>
                
                                        
                                        <a class="dropdown-item badge bg-danger" href="#">Delete<i data-feather="trash"></i></a>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        
                    </div>
                </div>

                <div class="col-6">
                    <div class="fs-5">
                        <p>Daftar reviews terbaru</p>
                    </div>
                    <div class="py-2">
                        <div class="card card-body">
                            <h5 class="fw-bold">Ivan</h5>
                            <p>penjelasannya enak dan mudah dimengerti, terima kasih.</p>
                            <div class="">
                                <p class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
    </div>


<!--create Video form Modal -->
<div class="modal fade text-left" id="inlineForm1" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Create Video</h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Name: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name Video"
                            class="form-control">
                    </div>
                    <label>URL Video: </label>
                    <div class="form-group">
                        <input type="text" placeholder="URL Video"
                            class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1"
                        data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Edit Chapter form Modal -->
<div class="modal fade text-left" id="inlineForm2" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Edit Chapter</h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Name: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name Video"
                            class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1"
                        data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Edit video form Modal -->
<div class="modal fade text-left" id="inlineForm3" tabindex="-1"
role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Edit Video</h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Name: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name Chapter"
                            class="form-control">
                    </div>
                    <label>URL Video: </label>
                    <div class="form-group">
                        <input type="text" placeholder="URL Video"
                            class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1"
                        data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

