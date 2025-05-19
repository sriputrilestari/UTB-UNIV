@extends('layouts.admin')
@section('content')

<div class="main-container">
    <div class="container-fluid">
        <div class="row justify-content-start">
            <div class="col-lg-8">
                <div class="card-box p-5 mb-30 shadow-lg rounded-lg" style="background-color: #ffffff;">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center">
                            <img src="admin/vendors/images/UTB-logo.png.png" alt="Welcome Image" class="img-fluid" style="max-height: 220px;">
                        </div>
                        <div class="col-md-8">
                            <h2 class="font-24 font-weight-bold text-capitalize mb-2">Selamat Datang, Admin!</h2>
                            <h3 class="text-primary font-weight-bold mb-3">Universitas Teknologi Bandung</h3>
                            <p class="font-16 text-secondary" style="max-width: 700px;">
                                Anda telah berhasil masuk ke dashboard administrator Universitas Teknologi Bandung.
                                Di sini Anda dapat mengelola seluruh informasi penting mulai dari artikel, data dosen,
                                fakultas, fasilitas kampus, UKM, hingga prestasi mahasiswa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
