@extends('layouts.user')
@section('content')
    <!-- Branda -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('user/img/carousel-1.jpg') }}"
                    style="width: 100%; height: 100vh; object-fit: cover;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Universitas Teknologi
                                    Bandung</h5>
                                <h1 class="display-3 text-white animated slideInDown">Lebih dari sekadar kampus, ini tempat
                                    kamu berkembang</h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Di UTB, setiap langkah adalah bagian dari perjalanan menuju masa depan yang kamu
                                    impikan.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lihat
                                    lainnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('user/img/carousel-2.jpg') }}"
                    style="width: 100%; height: 100vh; object-fit: cover; overflow-x: hidden;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Universitas Teknologi
                                    Bandung</h5>
                                <h1 class="display-3 text-white animated slideInDown">Langkah kecilmu hari ini, bisa jadi
                                    perubahan besar esok hari
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">Bersama UTB, kamu akan menemukan cara terbaik untuk
                                    berkarya, menginspirasi, dan memberi makna.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lihat
                                    lainnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Beranda -->

    <!-- About Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('user/img/about.jpg') }}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Kami</h6>
                    <h1 class="mb-4">Selamat Datang Di UTB</h1>
                    <p class="mb-4">Universitas Teknologi Bandung (UTB) adalah kampus yang fokus pada pengembangan
                        teknologi, inovasi, dan kewirausahaan. Dengan berbagai program studi yang relevan dan terus
                        diperbarui, UTB siap mencetak lulusan yang mampu bersaing di dunia kerja.</p>
                    <p class="mb-4">UTB juga aktif bekerja sama dengan berbagai mitra industri dan lembaga internasional
                        untuk mendukung pengalaman belajar yang praktis dan sesuai kebutuhan zaman. Fasilitas kampus pun
                        lengkap—mulai dari lab modern, perpustakaan digital, ruang kreatif, sampai pusat pengembangan
                        startup mahasiswa.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Dosen yang
                                berpengalaman
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Sertifikasi tingkat
                                internasional</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kelas online yang fleksibel
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kurikulum sesuai kebutuhan
                                industri</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Jaringan kolaborasi global
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Fasilitas penunjang yang
                                lengkap</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- informasi -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Sejarah</h5>
                            <p>Sekolah Tinggi Teknologi Bandung (STTB) berdiri sejak 1991, dan pada maret 2024 Sekolah
                                Tinggi Teknologi Bandung berubah untuk manjadi Universitas Teknologi Bandung (UTB)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Visi & Misi</h5>
                            <p>Sebagai Pilar inovasi dan keunggulan dalam pendidikan teknologi, Visi dan Misi Universitas
                                Teknologi Bandung (UTB) menjadi kompas utama.</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Lokasi</h5>
                            <p> JL. Soekarno Hatta No. 376–378, Kelurahan Kb. Lega, Kecamatan Bojongloa Kidul, Kota Bandung,
                                Jawa Barat 40235</p>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Jumlah Mahasiswa Aktif</h5>
                            <p>UTB memiliki kurang lebih 4.000 mahasiswa
                               aktif dan sedang merencanakan pengembangan fasilitas kampus untuk mendukung peningkatan
                               jumlah mahasiswa di masa depan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
