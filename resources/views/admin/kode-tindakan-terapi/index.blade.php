@extends('layouts.jenhewan') <!-- kalau kamu pakai layout -->

@section('content')
<div class="container">
    <h1>Daftar Kode Tindakan Terapi</h1>

    <a href="{{ route('jenis-hewan.create') }}" class="btn btn-add">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>Id Kode Tindakan Terapi</th>
                <th>Kode</th>
                <th>Deskripsi Tindakan Terapi</th>
                <th>Id Kategori</th>
                <th>Id Kategori Klinis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kodeTindakanTerapi as $kodetindakan)
                <tr>
                    <td>{{ $kodetindakan->idkode_tindakan_terapi }}</td>
                    <td>{{ $kodetindakan->kode }}</td>
                    <td>{{ $kodetindakan->deskripsi_tindakan_terapi }}</td>
                    <td>{{ $kodetindakan->idkategori }}</td>
                    <td>{{ $kodetindakan->idkategori_klinis }}</td>
                    <td>
                        <a href="{{ route('jenis-hewan.edit', $kodetindakan->idkode_tindakan_terapi) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('jenis-hewan.destroy', $kodetindakan->idkode_tindakan_terapi) }}" method="POST" style="display:inline;">
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
