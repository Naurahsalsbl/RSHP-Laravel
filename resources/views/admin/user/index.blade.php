@extends('layouts.jenhewan') <!-- kalau kamu pakai layout -->

@section('content')
<div class="container">
    <h1>Daftar User</h1>

    <a href="{{ route('jenis-hewan.create') }}" class="btn btn-add">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>Id User</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Id Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
                <tr>
                    <td>{{ $u->iduser }}</td>
                    <td>{{ $u->nama }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->idrole }}</td>
                    <td>
                        <a href="{{ route('jenis-hewan.edit', $u->iduser) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('jenis-hewan.destroy', $u->iduser) }}" method="POST" style="display:inline;">
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
