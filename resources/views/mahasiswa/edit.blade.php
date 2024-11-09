@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Mahasiswa') }}</div>

                <div class="card-body">
                    <form action="{{ route('mahasiswa.update', $mahasiswas->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" class="form-control" value="{{ $mahasiswas->nim }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $mahasiswas->nama }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" value="{{ $mahasiswas->tempat_lahir }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $mahasiswas->tanggal_lahir }}" required>
                        </div>

                        <div class="d-flex justify-content-start">
                            <button type="submit" class="btn btn-success">
                                {{ __('Simpan') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
