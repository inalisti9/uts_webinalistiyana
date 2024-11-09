@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Mahasiswa') }}</div>

                <div class="card-body">
                <div class="mb-3 text-end">
                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">Create</a>
                    </div>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswas as $s)
                            <tr>
                                <td>{{$s->id}}</td>
                                <td>{{ $s->nim }}</td>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->tempat_lahir }}</td>
                                <td>{{ $s->tanggal_lahir }}</td>
                                <td>
                                    <a href="{{ route('mahasiswa.show', $s->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('mahasiswa.edit', $s->id) }}" class="btn btn-warning">Edit</a>
                                    
                                    <form action="{{ route('mahasiswa.destroy', $s->id) }}" method="POST" style="display: inline-block;" data-delete>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $mahasiswas->links('pagination::bootstrap-4') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


