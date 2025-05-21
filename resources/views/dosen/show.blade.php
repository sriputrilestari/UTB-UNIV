@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TAMPILAN DATA DOSEN</h1>
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
                    <form action="" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">
                                <th>Nama Dosen</th>
                            </label>
                            <input type="text" class="form-control" name="nama_dosen" value="{{ $dosen->nama_dosen }}"
                                disabled>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">
                                <th>Telepon</th>
                            </label>
                            <input type="text" class="form-control" name="telepon" value="{{ $dosen->telepon }}"
                                disabled>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">
                                <th>Email</th>
                            </label>
                            <input type="text" class="form-control" name="email" value="{{ $dosen->email }}" disabled>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">
                                <th>Jabatan</th>
                            </label>
                            <input type="text" class="form-control" name="jabatan" value="{{ $dosen->jabatan }}"
                                disabled>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">
                                <th>Status</th>
                            </label>
                            <input type="text" class="form-control" name="status" value="{{ $dosen->status }}" disabled>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">
                                <th>Foto</th>
                            </label><br>
                            <img src="{{ asset('storage/dosen/' . $dosen->foto) }}" alt=""
                                style="width: 150px; height: 150px;"><br>
                        </div>
                        <br>
                        <div>
                            <a href="{{ route('dosen.index') }}" type="submit" class="btn btn-success">Kembali</a>
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
