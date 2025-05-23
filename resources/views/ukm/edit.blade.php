@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT DATA UKM</h1>

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
                    <form action="{{ route('ukm.update', $ukm->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama ukm</label>
                            <input type="text" class="form-control" name="nama_ukm" placeholder="Edit nama ukm"
                                value="{{ $ukm->nama_ukm }}">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" class="form-control">{{ $ukm->deskripsi }}</textarea>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for=""> Ganti foto</label><br>
                            <img src="{{ asset('storage/ukm/' . $ukm->foto) }}" alt=""
                                style="width: 90px; height: 90px;"><br>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"
                                value="{{ $ukm->foto }}">
                            @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div><br>
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
