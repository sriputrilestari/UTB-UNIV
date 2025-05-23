@extends('layouts.user')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Ukm</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url ('/')}}">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Ukm</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
    <div class="container">
        <div class="row g-4 justify-content-center">
            @foreach ($ukm as $data)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                        <img src="{{ asset('storage/ukm/' . $data->foto) }}" alt=""
                        style="width: 411px; height: 200px;"><br>
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="{{ route('detail_ukm', $data->id) }}"
                                    class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 30px;">Baca Artikel</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">{{ $data->nama_ukm }}</h3>
                            <p class="mb-4">{{ Str::limit($data->deskripsi, 100) }}</p>
                        </div>
                        <br><br>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Courses End -->
@endsection
