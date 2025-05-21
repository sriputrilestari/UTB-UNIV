@extends('layouts.admin')
@section('content')
    <div class="card">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header"> TAMBAH DATA UKM</h1>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <tbody>
                                <form action="{{ route('ukm.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="">
                                            <th>Nama Ukm</th>
                                        </label>
                                        <input type="text"
                                            class="form-control @error('nama_ukm') is-invalid @enderror"
                                            name="nama_ukm" placeholder="Tambahkan nama ukm">
                                        @error('nama_ukm')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div><br>
                                    <div class="mb-3">
                                        <label for="">
                                            <th>Deskripsi</th>
                                        </label>
                                        <textarea name="deskripsi" id="" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Tambahkan deskripsi ukm"></textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div><br>
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
                                </div><br>
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