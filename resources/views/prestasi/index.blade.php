@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DATA PRESTASI</h1>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body ">
                <a href="{{ route('prestasi.create') }}" class="btn btn-primary btn-sm" style="float: right">Tambah</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Prestasi</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($prestasi as $data)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td scope="row">{{ $data->nama_prestasi }}</td>
                                    <td scope="row">{{ $data->deskripsi }}</td>
                                    <td scope="row">{{ $data->jenis }}</td>
                                    <td>
                                        <img src="{{ asset('storage/prestasi/' . $data->foto) }}" alt=""
                                            style="width: 90px; height: 90px;">
                                    </td>
                                    <th>
                                        <form action="{{ route('prestasi.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('prestasi.edit', $data->id) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('prestasi.show', $data->id) }}"
                                                class="btn btn-warning">Tampil</a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confrim('Apakah Anda Yakin?')">Hapus</button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
