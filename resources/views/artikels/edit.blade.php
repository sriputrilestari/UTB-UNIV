@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT DATA ARTIKEL</h1>

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
                    <form action="{{ route('artikels.update', $artikels->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror " name="judul"
                                placeholder="Edit judul artikel" value="{{ $artikels->judul }}">
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <th>Isi</th>
                            <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" placeholder="Edit isi artikel">{{ $artikels->isi }}</textarea>
                            @error('isi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div>
                                <br>
                                <div class="mb-3">
                                    <label for="">Edit foto</label><br>
                                    <img src="{{ asset('storage/artikels/' . $artikels->foto) }}" alt=""
                                        style="width: 90px; height: 90px;"><br>
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto" value="{{ $artikels->foto }}">
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>
                                <div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
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
    </div>
@endsection
