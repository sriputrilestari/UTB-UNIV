@extends('layouts.user')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Prestasi</h6>
                <h1 class="mb-5">Detail Prestasi</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('storage/prestasi/' . $data->foto) }}" alt="Image"
                                class="img-fluid rounded" style="height: 200px; object-fit: cover; width: 100%;">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">{{ $data->nama_prestasi }}</h3>
                            <p class="mb-4">{{ $data->deskripsi }}</p>
                            <p class="mb-4"><h5>{{ $data->jenis }}</h5></p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
             <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="{{ url('prestasi') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                    style="border-radius: 30px 0 30px;">Kembali</a>
            </div>
        </div>
    </div>
@endsection
