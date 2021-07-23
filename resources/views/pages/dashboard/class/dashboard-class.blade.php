@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau|Class')

@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Class</h3>
                <p class="text-subtitle text-muted">Daftar kelas anda silahkan click detail untuk info selanjutnya!.</p>
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
                            <th>Reviews</th>
                            <th>Category</th>
                            <th>Chapters</th>
                            <th>Videos</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>ini gambar</td>
                            <td>10</td>
                            <td>code</td>
                            <td>9</td>
                            <td>21</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Info
                                    </button>
                                    <div class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item badge bg-success" href="#">Detail</a>
                                        <a class="dropdown-item badge bg-primary" href="#">Edit</a>
                                        <a class="dropdown-item badge bg-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Graiden</td>
                            <td>ini gambar</td>
                            <td>10</td>
                            <td>code</td>
                            <td>9</td>
                            <td>21</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Info
                                    </button>
                                    <div class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item badge bg-success" href="#">Detail</a>
                                        <a class="dropdown-item badge bg-primary" href="#">Edit</a>
                                        <a class="dropdown-item badge bg-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Graiden</td>
                            <td>ini gambar</td>
                            <td>10</td>
                            <td>code</td>
                            <td>9</td>
                            <td>21</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Info
                                    </button>
                                    <div class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item badge bg-success" href="#">Detail</a>
                                        <a class="dropdown-item badge bg-primary" href="#">Edit</a>
                                        <a class="dropdown-item badge bg-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection