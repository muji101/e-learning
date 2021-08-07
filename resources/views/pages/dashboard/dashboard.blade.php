@extends('layouts.dashboard')

@section('title', 'Dashboard | Go-Sinau')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
            <p class="text-subtitle text-muted">Your your statistics</p>
        </div>
        <section class="section">
            <div class="row mb-2">
                @if (Auth::user()->role == 'TEACHER')
                    <div class="col-12 col-md-3">
                        <div class="card card-statistic">
                            <div class="card-body p-0">
                                <div class="d-flex flex-column">
                                    <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class='card-title'>KELAS</h3>
                                        <div class="card-right d-flex align-items-center">
                                            <p>{{ $classesCount->count() }}</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="canvas1" style="height:100px !important"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card card-statistic">
                            <div class="card-body p-0">
                                <div class="d-flex flex-column">
                                    <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class='card-title'>KATEGORI</h3>
                                        <div class="card-right d-flex align-items-center">
                                            <p>{{ $categories->count() }}</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="canvas2" style="height:100px !important"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-3">
                        <div class="card card-statistic">
                            <div class="card-body p-0">
                                <div class="d-flex flex-column">
                                    <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class='card-title'>USERS</h3>
                                        <div class="card-right d-flex align-items-center">
                                            <p>{{ $users->count() }}</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="canvas3" style="height:100px !important"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-12 col-md-3">
                        <div class="card card-statistic">
                            <div class="card-body p-0">
                                <div class="d-flex flex-column">
                                    <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class='card-title'>VIDEO</h3>
                                        <div class="card-right d-flex align-items-center">
                                            <p>{{ $videos->count() }}</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="canvas4" style="height:100px !important"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card card-statistic">
                            <div class="card-body p-0">
                                <div class="d-flex flex-column">
                                    <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class='card-title'>PENGGUNA</h3>
                                        <div class="card-right d-flex align-items-center">
                                            <p>{{ $joinall->count() }}</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="canvas4" style="height:100px !important"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-12 col-md-3">
                        <div class="card card-statistic">
                            <div class="card-body p-0">
                                <div class="d-flex flex-column">
                                    <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class='card-title'>Kelas Saya</h3>
                                        <div class="card-right d-flex align-items-center">
                                            <p>{{ $joins->count() }}</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="canvas4" style="height:100px !important"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-3">
                        <div class="card card-statistic">
                            <div class="card-body p-0">
                                <div class="d-flex flex-column">
                                    <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class='card-title'>DESIGN</h3>
                                        <div class="card-right d-flex align-items-center">
                                            <p>{{ $videos->count() }}</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="canvas4" style="height:100px !important"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                @endif
                
            </div>

            
            <div class="row mb-4">
                <div class="col-md-8">
                    {{-- <div class="card">
                        <div class="card-header">
                            <h3 class='card-heading p-1 pl-3'>Kelas</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="pl-3">
                                        <h1 class='mt-5'>$21,102</h1>
                                        <p class='text-xs'><span class="text-green"><i data-feather="bar-chart"
                                                    width="15"></i> +19%</span> than last month</p>
                                        <div class="legends">
                                            <div class="legend d-flex flex-row align-items-center">
                                                <div class='w-3 h-3 rounded-full bg-info me-2'></div><span
                                                    class='text-xs'>Last Month</span>
                                            </div>
                                            <div class="legend d-flex flex-row align-items-center">
                                                <div class='w-3 h-3 rounded-full bg-blue me-2'></div><span
                                                    class='text-xs'>Current Month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">
                                    <canvas id="bar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Kelas Terbaru</h4>
                            {{-- <div class="d-flex ">
                                <i data-feather="download"></i>
                            </div> --}}
                        </div>
                        <div class="card-body px-0 pb-0">
                            @if (Auth::user()->role == 'TEACHER')
                                <div class="table-responsive">
                                    <table class='table mb-0'>
                                        <thead>
                                            <tr>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($classes as $class)
                                                <tr>
                                                    <td><img src="{{ asset('storage/'.$class->photo) }}" alt="" style="width: 60px"></td>
                                                    <td class="fw-bold">{{ $class->name }}</td>
                                                    <td>
                                                        {!! str_word_count($class->description) > 5 ? substr($class->description, 0, 50) . ' ...' : $class->description !!}
                                                    </td>
                                                    <td>{{ $class->category->name }}</td>
                                                    <td>
                                                        <span class="badge bg-success">Active</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                @forelse ($joinses as $join)
                                    <a href="{{ route('class_detail', $join->course->id) }}">
                                        <div class="d-flex my-2 p-4">
                                            <div class="">
                                                <img src="{{ asset('storage/'. $join->course->photo) }}" style="width : 200px" alt="">
                                            </div>
                                            <div class="ps-4">
                                                <h1>{{ $join->course->name }}</h1>
                                                <p class="fst-italic">{{ $join->course->category->name }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                    <h1 class=" text-gray-800 text-2xl p-4 mt-24">Kelas Tidak Ditemukan!</h1>
                                @endforelse
                            @endif
                            


                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    {{-- <div class="card ">
                        <div class="card-header">
                            <h4>Your Earnings</h4>
                        </div>
                        <div class="card-body">
                            <div id="radialBars"></div>
                            <div class="text-center mb-5">
                                <h6>From last month</h6>
                                <h1 class='text-green'>+$2,134</h1>
                            </div>
                        </div>
                    </div> --}}
                    <div class="card widget-todo">
                        @if (Auth::user()->role == 'TEACHER')
                            <div
                                class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h4 class="card-title d-flex">
                                    <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Kelas Populer
                                </h4>

                            </div>
                            <div class="card-body px-0 py-1">
                                <table class='table table-borderless'>
                                    {{-- kelas Populer --}}
                                        <tr>
                                            <th>Kelas</th>
                                            <th>Pengguna</th>
                                        </tr>
                                    @foreach ($classesPop as $pop)
                                        @if ($pop->joinPop->count() > 0)
                                            <tr>
                                                <td class='col-8'>{{ $pop->name }}</td>
                                                {{-- <td class='col-4'>
                                                    <div class="progress progress-info">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td> --}}
                                                <td class='col-4 text-center'>
                                                    <p class="badge bg-success mb-0">{{ $pop->joinPop->count() }}</p>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    {{-- <tr>
                                        <td class='col-3'>VueJS</td>
                                        <td class='col-6'>
                                            <div class="progress progress-success">
                                                <div class="progress-bar" role="progressbar" style="width: 35%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>30%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>Laravel</td>
                                        <td class='col-6'>
                                            <div class="progress progress-danger">
                                                <div class="progress-bar" role="progressbar" style="width: 50%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>50%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>ReactJS</td>
                                        <td class='col-6'>
                                            <div class="progress progress-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 80%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>80%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>Go</td>
                                        <td class='col-6'>
                                            <div class="progress progress-secondary">
                                                <div class="progress-bar" role="progressbar" style="width: 65%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>65%</td>
                                    </tr> --}}
                                </table>
                            </div>
                        @else
                            <div
                                class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h4 class="card-title d-flex">
                                    <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Proggres Kelas
                                </h4>

                            </div>
                            <div class="card-body px-0 py-1">
                                <table class='table table-borderless'>
                                    <tr>
                                        <td class='col-3'>UI Design</td>
                                        <td class='col-6'>
                                            <div class="progress progress-info">
                                                <div class="progress-bar" role="progressbar" style="width: 60%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>60%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>VueJS</td>
                                        <td class='col-6'>
                                            <div class="progress progress-success">
                                                <div class="progress-bar" role="progressbar" style="width: 35%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>30%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>Laravel</td>
                                        <td class='col-6'>
                                            <div class="progress progress-danger">
                                                <div class="progress-bar" role="progressbar" style="width: 50%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>50%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>ReactJS</td>
                                        <td class='col-6'>
                                            <div class="progress progress-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 80%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>80%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>Go</td>
                                        <td class='col-6'>
                                            <div class="progress progress-secondary">
                                                <div class="progress-bar" role="progressbar" style="width: 65%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>65%</td>
                                    </tr>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection