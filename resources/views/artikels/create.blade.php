@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> TAMBAH DATA ARTIKEL</h1>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <tbody>
                    <form action="{{ route('artikels.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <th>Judul</th>
                            <input type="text" class="form-control  @error('judul') is-invalid @enderror" name="judul"
                                placeholder="Tambahkan judul artikel">
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div><br>
                                <div class="mb-3">
                                    <th>Isi</th>
                                    <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" placeholder="Tambahkan isi artikel"></textarea>
                                    @error('isi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div><br>
                                        <div class="mb-3">
                                            <th> Tambah foto</th>
                                            <input type="file" name="foto"
                                                class="form-control @error('foto') is-invalid @enderror" name="foto">
                                            @error('foto')
                                                <div class="invalid-feedback">{{ $message }}
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
    </div>
@endsection
