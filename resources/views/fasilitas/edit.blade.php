@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT DATA FASILITAS</h1>

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
                    <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama fasilitas</label>
                            <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror"
                                name="nama_fasilitas" placeholder="Edit nama fasilitas">
                            @error('nama_fasilitas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for=""> Ganti foto</label><br>
                            <img src="{{ asset('storage/fasilitas/' . $fasilitas->foto) }}" alt=""
                                style="width: 90px; height: 90px;"><br>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"
                                value="{{ $fasilitas->foto }}">
                            @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-success">Simpan</button>
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
@endsection
