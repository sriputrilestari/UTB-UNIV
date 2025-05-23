@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">prestasi</h1>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            </div>
            <!-- /.row -->
            <!-- /.panel-heading -->
            <div class="panel-body">
                <tbody>
                    <form action="" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">
                                <th>Nama Prestasi</th>
                            </label>
                            <input type="text" class="form-control" name="nama_prestasi"
                                value="{{ $prestasi->nama_prestasi }}" disabled>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">Deskripsi</label>
                            <textarea name="deksripsi" id="" class="form-control" disabled>{{ $prestasi->deskripsi }}</textarea>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">
                                <th>Jenis</th>
                            </label>
                            <input type="text" class="form-control" name="jenis" value="{{ $prestasi->jenis }}"
                                disabled>
                        </div>
                        <br>
                        <br>
                        <div class="mb-3">
                            <label for="">
                                <th>Ganti foto</th>
                            </label><br>
                            <img src="{{ asset('storage/prestasi/' . $prestasi->foto) }}" alt=""
                                style="width: 150px; height: 150px;"><br>
                        </div>
                        <br>
                        <div>
                            <a href="{{ route('prestasi.index') }}" type="submit" class="btn btn-success">Kembali</a>
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
