@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Tambah Jenis Hewan</h4>
        </div>
        <div class="card-body">
            {{-- Tampilkan pesan error validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form input --}}
            <form action="{{ route('admin.jenis-hewan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_jenis" class="form-label">Nama Jenis Hewan</label>
                    <input type="text" name="nama_jenis" id="nama_jenis"
                           class="form-control @error('nama_jenis') is-invalid @enderror"
                           value="{{ old('nama_jenis') }}" placeholder="Masukkan nama jenis hewan">
                    @error('nama_jenis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.jenis-hewan.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
