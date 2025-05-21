@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT DATA FAKULTAS</h1>

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
                    <form action="{{ route('fakultas.update', $fakultas->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama Fakultas</label>
                            <input type="text" class="form-control @error('nama_fakultas') is-invalid @enderror"
                                name="nama_fakultas" placeholder="Edit nama fakultas"
                                value="{{ $fakultas->nama_fakultas }}">
                            @error('nama_fakultas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <th>Deskripsi</th>
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                placeholder="Edit deskripsi fakultas"></textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div><br>
                                <div class="mb-3">
                                    <label for=""> Ganti foto</label><br>
                                    <img src="{{ asset('storage/fakultas/' . $fakultas->foto) }}" alt=""
                                        style="width: 90px; height: 90px;"><br>
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto" value="{{ $fakultas->foto }}">
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>
                                <div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
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
@endsection
