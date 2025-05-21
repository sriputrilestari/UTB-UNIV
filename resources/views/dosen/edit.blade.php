@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT DATA DOSEN</h1>

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
                    <form action="{{ route('dosen.update', $dosen->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama Dosen</label>
                            <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror"
                                name="nama_dosen" placeholder="Edit nama dosen" value="{{ $dosen->nama_dosen }}">
                            @error('nama_dosen')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">Telepon</label>
                            <input type="number" class="form-control @error('telepon') is-invalid @enderror" name="telepon"
                                placeholder="Edit telepon dosen" value="{{ $dosen->telepon }}">
                            @error('telepon')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                placeholder="Edit email dosen" value="{{ $dosen->email }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <th>Jabatan</th>
                            <select class="form-control @error('jabatan') is-invalid @enderror" name="jabatan"
                                placeholder="Edit jabatan">
                                <option value="Asisten ahli" {{ $dosen->jabatan == 'Asisten ahli' ? 'selected' : '' }}>
                                    Asisten
                                    ahli
                                </option>
                                <option value="Lektor" {{ $dosen->jabatan == 'Lektor' ? 'selected' : '' }}>
                                    Lektor </option>
                                <option value="Kepala lektor" {{ $dosen->jabatan == 'Kepala lektor' ? 'selected' : '' }}>
                                    Kepala
                                    lektor
                                </option>
                                <option value="Profesor" {{ $dosen->jabatan == 'Profesor' ? 'selected' : '' }}>Profesor
                                </option>
                            </select>
                            @error('jabatan')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <th>Status</th>
                            <select class="form-control  @error('status') is-invalid @enderror" name="status"
                                placeholder="Edit status">
                                <option value="Dosen tetap" {{ $dosen->status == 'Dosen tetap' ? 'selected' : '' }}>Dosen
                                    tetap
                                </option>
                                <option value="Dosen tidak tetap"
                                    {{ $dosen->status == 'Dosen tidak tetap' ? 'selected' : '' }}>Dosen tidak tetap
                                </option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for=""> Ganti foto</label><br>
                            <img src="{{ asset('storage/dosen/' . $dosen->foto) }}" alt=""
                                style="width: 90px; height: 90px;"><br>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"
                                value="{{ $dosen->foto }}">
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
    </div>
@endsection
