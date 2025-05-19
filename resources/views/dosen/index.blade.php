@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DATA DOSEN</h1>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <a href="{{ route('dosen.create') }}" class="btn btn-primary btn-sm" style="float: right">Tambah</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Dosen</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Status</th>
                                <th scopr="col">Foto</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($dosen as $data)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td scope="row">{{ $data->nama_dosen }}</td>
                                    <td scope="row">{{ $data->telepon }}</td>
                                    <td scope="row">{{ $data->email }}</td>
                                    <td scope="row">{{ $data->jabatan }}</td>
                                    <td scope="row">{{ $data->status }}</td>
                                    <td>
                                        <img src="{{ asset('storage/dosen/' . $data->foto) }}" alt=""
                                            style="width: 90px; height: 90px;">
                                    </td>
                                    <th>
                                        <form action="{{ route('dosen.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('dosen.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('dosen.show', $data->id) }}"
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
    </div>
@endsection
