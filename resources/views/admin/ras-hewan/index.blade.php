@extends('layouts.jenhewan') <!-- kalau kamu pakai layout -->

@section('content')
<div class="container">
    <h1>Daftar Ras Hewan</h1>

    <a href="{{ route('jenis-hewan.create') }}" class="btn btn-add">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>Id Ras Hewan</th>
                <th>Nama Ras Hewan</th>
                <th>Id Jenis Hewan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rasHewan as $ras)
                <tr>
                    <td>{{ $ras->idras_hewan }}</td>
                    <td>{{ $ras->nama_ras }}</td>
                    <td>{{ $ras->idjenis_hewan }}</td>
                    <td>
                        <a href="{{ route('jenis-hewan.edit', $ras->idras_hewan) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('jenis-hewan.destroy', $ras->idras_hewan) }}" method="POST" style="display:inline;">
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
