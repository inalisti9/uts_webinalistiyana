<!-- resources/views/students/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Mahasiswa') }}</div>

                <div class="card-body">
                    <p><strong>ID:</strong> {{ $mahasiswas->id }}</p>
                    <p><strong>NIM:</strong> {{ $mahasiswas->nim }}</p>
                    <p><strong>Nama:</strong> {{ $mahasiswas->nama }}</p>
                    <p><strong>Tempat Lahir:</strong> {{ $mahasiswas->tempat_lahir }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ $mahasiswas->tanggal_lahir }}</p>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-success">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection