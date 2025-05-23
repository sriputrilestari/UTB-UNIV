@extends('layouts.user')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Fasilitas</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url ('/')}}">Branda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Fasilitas</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="row g-4 justify-content-end">
                @foreach ($fasilitas as $data)
                    <div class="col-lg-4 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="#">
                        <img src="{{ asset('storage/fasilitas/' . $data->foto) }}" alt=""
                        style="width: 400px; height: 400px;">
                            <div><br>
                                <a href="{{ route('detail_fasilitas', $data->id) }}"
                                    class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 30px;">Lihat Lebih Lanjut</a>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Categories Start -->
@endsection
