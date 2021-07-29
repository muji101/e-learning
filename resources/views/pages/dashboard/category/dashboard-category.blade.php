@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau|Category')

@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Category</h3>
                <p class="text-subtitle text-muted">Daftar Kategori anda silahkan click info untuk info selanjutnya!.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Daftar kategori anda
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Description</th>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td class="fw-bold">{{ $category->name }}</td>
                                <td><img style="width: 60px" src="{{ asset('/storage/'.$category->photo) }}" alt=""></td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->course->count() }}</td>
                                <td>
                                    <div class="dropend">
                                        <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Info
                                        </button>
                                        <div class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item badge bg-primary" href="{{ route('category-edit', $category->id) }}">Edit</a>
                                            <form action="{{ route('category-delete', $category->id) }}" method="POST">
                                                @csrf
                                                @method('DElETE')
                                                <button class="dropdown-item badge bg-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection