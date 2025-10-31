@extends('layouts.jenhewan') <!-- kalau kamu pakai layout -->

@section('content')
<div class="container">
    <h1>Daftar Role</h1>

    <a href="{{ route('jenis-hewan.create') }}" class="btn btn-add">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>Id Role</th>
                <th>Nama Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($role as $role)
                <tr>
                    <td>{{ $role->idrole }}</td>
                    <td>{{ $role->nama_role }}</td>
                    <td>
                        <a href="{{ route('jenis-hewan.edit', $role->idrole) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('jenis-hewan.destroy', $role->idrole) }}" method="POST" style="display:inline;">
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
