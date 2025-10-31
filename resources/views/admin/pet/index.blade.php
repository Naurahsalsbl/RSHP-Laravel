@extends('layouts.jenhewan') <!-- kalau kamu pakai layout -->

@section('content')
<div class="container">
    <h1>Daftar Pet</h1>

    <a href="{{ route('jenis-hewan.create') }}" class="btn btn-add">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>Id Pet</th>
                <th>Nama Pet</th>
                <th>Tanggal Lahir</th>
                <th>Warna Tanda</th>
                <th>Jenis Kelamin</th>
                <th>Id Pemilik</th>
                <th>Id Ras Hewan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pet as $pet)
                <tr>
                    <td>{{ $pet->idpet }}</td>
                    <td>{{ $pet->nama }}</td>
                    <td>{{ $pet->tanggal_lahir }}</td>
                    <td>{{ $pet->warna_tanda }}</td>
                    <td>{{ $pet->jenis_kelamin }}</td>
                    <td>{{ $pet->idpemilik }}</td>
                    <td>{{ $pet->idras_hewan }}</td>
                    <td>
                        <a href="{{ route('jenis-hewan.edit', $pet->idpet) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('jenis-hewan.destroy', $pet->idpet) }}" method="POST" style="display:inline;">
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
