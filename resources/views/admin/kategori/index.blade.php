@extends('layouts.jenhewan') <!-- kalau kamu pakai layout -->

@section('content')
<div class="container">
    <h1>Daftar Kategori</h1>

    <a href="{{ route('jenis-hewan.create') }}" class="btn btn-add">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>Id Kategori</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $kategori)
                <tr>
                    <td>{{ $kategori->idkategori }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('jenis-hewan.edit', $kategori->idkategori) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('jenis-hewan.destroy', $kategori->idkategori) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
