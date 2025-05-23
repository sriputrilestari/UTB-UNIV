@extends('layouts.user')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Fakultas</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url ('/')}}">Branda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Fakultas</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
               @foreach ( $fakultas as $data) 
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                        <img src="{{ asset('storage/fakultas/' . $data->foto) }}" alt=""
                                                style="width: 300px; height: 240px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">{{ $data->nama_fakultas}}</h5>
                            <small>{{ Str::limit ($data->deskripsi, 100)}}</small><br>
                        </div>
                    </div>
                </div>
               @endforeach 
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection