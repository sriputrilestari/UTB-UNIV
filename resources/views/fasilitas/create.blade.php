@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> TAMBAH DATA FASILITAS</h1>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <tbody>
                    <form action="{{ route('fasilitas.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">
                                <th>Nama fasilitas</th>
                            </label>
                            <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror"
                                name="nama_fasilitas" placeholder="Tambahkan nama fasilitas">
                            @error('nama_fasilitas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div><br>

                                <div class="mb-3">
                                    <label for="">Tambah Foto</label>
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto">
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div><br>
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
@endsection
