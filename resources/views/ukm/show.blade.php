@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">UKM</h1>

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
                                <th>Nama Ukm</th>
                            </label>
                            <input type="text" class="form-control" name="nama_ukm" value="{{ $ukm->nama_ukm }}"
                                disabled>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" class="form-control" disabled>{{ $ukm->deskripsi }}</textarea>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">
                                <th>Foto</th>
                            </label><br>
                            <img src="{{ asset('storage/ukm/' . $ukm->foto) }}" alt=""
                                style="width: 150px; height: 150px;"><br>
                        </div>
                        <br>
                        <div>
                            <a href="{{ route('ukm.index') }}" type="submit" class="btn btn-success">Kembali</a>
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
