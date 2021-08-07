@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau|List User')

@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Class</h3>
                <p class="text-subtitle text-muted">Daftar user anda silahkan click detail untuk info selanjutnya!.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Class</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Daftar kelas anda
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Role</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="fw-bold">{{ $user->name }}</td>
                            <td><img src="{{ asset('/storage/'.$user->image) }}" alt="" style="width: 60px"></td>
                            <td>{{ $user->title }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>-------</td>
                            {{-- <td>
                                <div class="dropend">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Info
                                    </button>
                                    <div class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item text-white rounded bg-success" href="{{ route('class-detail', $class->id) }}"><i data-feather="eye" width="20"></i> Detail</a>
                                        <a class="dropdown-item text-white rounded bg-primary" href="{{ route('class-edit', $class->id) }}"><i data-feather="edit" width="20"></i> Edit</a>
                                        <form action="{{ route('class-delete', $class->id) }}" method="POST">
                                            @csrf
                                            @method('DElETE')
                                            <button class="dropdown-item text-white rounded bg-danger"><i data-feather="trash" width="20"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection