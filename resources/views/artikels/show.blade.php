@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TAMPILAN DATA ARTIKEL</h1>

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
                                <th>Judul</th>
                            </label>
                            <input type="text" class="form-control" name="judul" value="{{ $artikels->judul }}"
                                disabled>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">Isi</label>
                            <textarea name="isi" id="" class="form-control" disabled>{{ $artikels->isi }}</textarea>
                        </div>
                        <br>
                        <br>
                        <div class="mb-3">
                            <label for="">
                                <th>Foto</th>
                            </label><br>
                            <img src="{{ asset('storage/artikels/' . $artikels->foto) }}" alt=""
                                style="width: 150px; height: 150px;"><br>
                        </div>
                        <br>
                        <div>
                            <a href="{{ route('artikels.index') }}" type="submit" class="btn btn-success">Kembali</a>
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
    </div>
@endsection
