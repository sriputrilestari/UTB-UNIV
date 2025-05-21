@extends('layouts.admin')
@section('content')
    <div class="card">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">DATA FAKULTAS</h1>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <a href="{{ route('fakultas.create') }}" class="btn btn-primary btn-sm" style="float: right">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama fakultas</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scopr="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($fakultas as $data)
                                    <tr>
                                        <td scope="row">{{ $no++ }}</td>
                                        <td scope="row">{{ $data->nama_fakultas }}</td>
                                        <td scope="row">{{ $data->deskripsi }}</td>
                                        <td>
                                            <img src="{{ asset('storage/fakultas/' . $data->foto) }}" alt=""
                                                style="width: 90px; height: 90px;">
                                        </td>
                                        <th>
                                            <form action="{{ route('fakultas.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('fakultas.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('fakultas.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confrim('Apakah Anda Yakin?')">Delete</button>
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
    </div>>
@endsection