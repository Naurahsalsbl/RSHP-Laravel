@extends('layouts.jenhewan') <!-- kalau kamu pakai layout -->

@section('content')
<div class="container">
    <h1>Daftar Jenis Hewan</h1>

    <a href="{{ route('jenis-hewan.create') }}" class="btn btn-add">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>Id Jenis Hewan</th>
                <th>Nama Jenis Hewan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jenisHewan as $index => $jenis)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $jenis->idjenis_hewan }}</td>
                    <td>{{ $jenis->nama_jenis_hewan }}</td>
                    <td>
                        <a href="{{ route('jenis-hewan.edit', $jenis->idjenis_hewan) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('jenis-hewan.destroy', $jenis->idjenis_hewan) }}" method="POST" style="display:inline;">
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
