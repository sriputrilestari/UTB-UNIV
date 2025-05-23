@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DATA ARTIKEL</h1>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body ">
                <a href="{{ route('artikels.create') }}" class="btn btn-primary btn-sm" style="float: right">Tambah</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($artikels as $data)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td scope="row">{{ Str::limit ($data->judul, 10) }}</td>
                                    <td scope="row">{{ Str::limit($data->isi, 10) }}</td>
                                    <td>
                                        @if ($data->foto)
                                            <img src="{{ asset('storage/artikels/' . $data->foto) }}" alt="Artikel Image"
                                                style="width: 90px; height: 90px; object-fit: cover;">
                                        @else
                                            <img src="{{ asset('images/default.jpg') }}" alt="Default Image"
                                                style="width: 90px; height: 90px; object-fit: cover;">
                                        @endif

                                    </td>
                                    <th>
                                        <form action="{{ route('artikels.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('artikels.edit', $data->id) }}" class="btn btn-success"><i
                                                    class="icon-copy ion-compose"></i></a>
                                            <a href="{{ route('artikels.show', $data->id) }}" class="btn btn-warning"><i
                                                    class="icon-copy ion-ios-list"></i></a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confrim('Apakah Anda Yakin?')"><i
                                                    class="icon-copy ion-trash-a"></i></button>
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
