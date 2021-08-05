@php
    $link= isset($classes->video->first()->url)
@endphp
@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau')

@section('content')
    <div class="main-content container-fluid">
        <div class="row border-4 border-bottom pb-4" style="height: 400px">
            <div class="col-6 page-title">
                <h1>{{ $classes->name }}</h1>
                <h5>{{ $classes->title }}</h5>
                <p class="text-subtitle fst-italic text-muted">{{ $classes->category->name }}</p>
                <div class="py-2">
                    <span class="fs-5 border-4 border-bottom">Description</span>
                    <p class="">
                        {{ $classes->description }}
                    </p>
                </div>
            </div>
            <div class="col-6">
                @if ($link)
                    <iframe class="w-100 h-100" src="{{ $link ? $classes->video->first()->url: '' }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @else
                    <h1>Belum Ada Video</h1>
                @endif
            </div>
            
        </div>


        <div class="py-4 fw-bold">
            <div class="row">
                <div class="col-6">
                    <div class="">
                        <a class="bg-primary px-4 py-2 text-white rounded" href="{{ route('chapter-create', $classes->id) }}">Create Chapter <i data-feather="plus" width="20"></i></a>
                    </div>

                    @php
                        $idchap = 0;
                    @endphp
                    {{-- chapter --}}
                    @foreach ($classes->chapter as $chapter)
                    <div class="p-2 card mt-4">
                        <div class="d-flex justify-content-between border-bottom border-2">
                                
                                <a class="w-50 fs-5 text-black-50" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    # {{ $chapter->name }}
                                    <i data-feather="chevron-down"></i>
                                </a>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle me-1 mb-1" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Info
                                </button>
                                <div class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item badge bg-success" href="{{ route('video-create', [$chapter->id, $classes->id]) }}">Video <i data-feather="plus" width="20"></i></a>
                                    <a class="dropdown-item badge bg-primary" href="{{ route('chapter-edit', $chapter->id) }}">Edit <i data-feather="edit" width="20"></i></a>
                                    <form action="{{ route('chapter-delete', $chapter->id) }}" method="POST">
                                        @csrf
                                        @method('DElETE')
                                        <button class="dropdown-item badge bg-danger">Delete <i data-feather="trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @foreach ($chapter->video as $video)
                        <div class="collapse ps-3" id="collapseExample">
                                <div class="my-1 d-flex justify-content-between">
                                    <a class="fs-5  text-black-50" href="#">
                                        <div class="d-flex justify-content-center">
                                            <span class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            <p class="ps-1 pt-0">{{ $video->title }}</p>
                                        </div>
                                    </a>
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Info
                                        </button>
                                        <div class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item badge bg-primary" href="{{ route('video-edit', $video->id) }}">Edit <i data-feather="edit" width="20"></i></a>
                                            <form action="{{ route('video-delete', $video->id) }}" method="POST">
                                                @csrf
                                                @method('DElETE')
                                                <button class="dropdown-item badge bg-danger">Delete <i data-feather="trash"></i></button>
                                            </form>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            @endforeach
                    </div>
                    @endforeach

                </div>

                <div class="col-6">
                    <div class="fs-4 fw-bold">
                        <p>Daftar 5 reviews terbaru</p>
                    </div>
                    <div class="py-2">
                        @forelse ($reviews as $review)
                            <div class="card card-body">
                                <h5 class="fw-bold">{{ $review->user->name }}</h5>
                                <p>{{ $review->content }}</p>
                                <div class="d-flex justify-content-between">
                                    <p class="d-flex">
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
                                    <h5>{{ $review->created_at }}</h5>
                                </div>
                            </div>
                        @empty
                            <h3>Tidak ada Komentar!</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

