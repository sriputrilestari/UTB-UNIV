@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> TAMBAH DATA DOSEN</h1>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <tbody>
                    <form action="{{ route('dosen.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">
                                <th>Nama Dosen</th>
                            </label>
                            <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror"
                                name="nama_dosen" placeholder="Tambahkan nama dosen">
                            @error('nama_dosen')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div><br>
                                <div class="mb-3">
                                    <label for="">
                                        <th>Telepon</th>
                                    </label>
                                    <input type="number" class="form-control @error('telepon') is-invalid @enderror"
                                        name="telepon" placeholder="No telepon dosen">
                                    @error('telepon')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div><br>
                                        <div class="mb-3">
                                            <label for="">
                                                <th>Email</th>
                                            </label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" placeholder="Email dosen">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div><br>
                                                <div class="mb-3">
                                                    <th>Jabatan</th>
                                                    <select class="form-control @error('jabatan') is-invalid @enderror"
                                                        name="jabatan" placeholder="Pilih jabatan">
                                                        <option value="">Pilih Jabatan
                                                        </option>
                                                        <option value="Asisten Ahli">Asisten ahli
                                                        </option>
                                                        <option value="Lektor">Lektor
                                                        </option>
                                                        <option value="Kepala Lektor">Kepala lektor
                                                        </option>
                                                        <option value="Profesor">Profesor
                                                        </option>
                                                    </select>
                                                    @error('jabatan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div><br>
                                                <div class="mb-3">
                                                    <th>Status</th>
                                                    <select class="form-control @error('status') is-invalid @enderror"
                                                        name="status" placeholder="Pilih status">
                                                        <option value="">Pilih status
                                                        </option>
                                                        <option value="Dosen Tetap">Dosen tetap
                                                        </option>
                                                        <option value="Dosen Tidak Tetap">Dosen idak tetap
                                                        </option>
                                                    </select>
                                                    @error('status')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div><br>
                                                <div>
                                                    <div class="mb-3">
                                                        <label for=""> Tambah Foto</label>
                                                        <input type="file"
                                                            class="form-control @error('foto') is-invalid @enderror"
                                                            name="foto">
                                                        @error('foto')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                    </form>
                </tbody>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
    </div>
    </div>
    <!-- js -->
    <script src="{{ asset('admin/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/scripts/dashboard.js') }}"></script>
@endsection
