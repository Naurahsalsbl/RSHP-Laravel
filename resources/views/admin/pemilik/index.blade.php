@extends('layouts.jenhewan') <!-- kalau kamu pakai layout -->

@section('content')
<div class="container">
    <h1>Daftar Pemilik</h1>

    <a href="{{ route('jenis-hewan.create') }}" class="btn btn-add">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>Id Pemilik</th>
                <th>No Wa</th>
                <th>Alamat</th>
                <th>Id User</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemilik as $pemilik)
                <tr>
                    <td>{{ $pemilik->idpemilik }}</td>
                    <td>{{ $pemilik->no_wa }}</td>
                    <td>{{ $pemilik->alamat }}</td>
                    <td>{{ $pemilik->iduser }}</td>
                    <td>
                        <a href="{{ route('jenis-hewan.edit', $pemilik->idpemilik) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('jenis-hewan.destroy', $pemilik->idpemilik) }}" method="POST" style="display:inline;">
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
