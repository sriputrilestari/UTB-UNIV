@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DATA UKM</h1>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <a href="{{ route('ukm.create') }}" class="btn btn-primary btn-sm" style="float: right">Tambah</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama ukm</th>
                                <th scope="col">Deskripsi</th>
                                <th scopr="col">Foto</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($ukm as $data)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td scope="row">{{ $data->nama_ukm }}</td>
                                    <td scope="row">{{ $data->deskripsi }}</td>
                                    <td>
                                        <img src="{{ asset('storage/ukm/' . $data->foto) }}" alt=""
                                            style="width: 90px; height: 90px;">
                                    </td>
                                    <th>
                                        <form action="{{ route('ukm.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('ukm.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('ukm.show', $data->id) }}" class="btn btn-warning">Tampil</a>
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
@endsection
