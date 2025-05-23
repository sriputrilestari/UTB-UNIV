<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <img src="{{ asset('user/img/logo_UTB1.png')}}" alt="Welcome Image" class="img-fluid" style="width: 50%;">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Branda</a>
            <a href="{{ url('/artikels')}}" class="nav-item nav-link">Artikel</a>
            <a href="{{ url('/dosen')}}" class="nav-item nav-link">Dosen</a>
            <a href="{{ url('/prestasi')}}" class="nav-item nav-link">Prestasi</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lainnya</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ url('/fasilitas')}}" class="dropdown-item">Fasilitas</a>
                    <a href="{{ url('/ukm')}}" class="dropdown-item">Ukm</a>
                    <a href="{{ url('/fakultas')}}" class="dropdown-item">fakultas</a>
                </div>
            </div>
        </div>
    </div>
</nav>
