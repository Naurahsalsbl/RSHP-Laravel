@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Resepsionis</h2>
    <p>Selamat datang, {{ Auth::user()->nama }}!</p>

    <h3>Data Pendaftaran</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Tanggal Daftar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendaftaran as $index => $p)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $p->pasien->nama ?? '-' }}</td>
                <td>{{ $p->tanggal_daftar }}</td>
                <td>{{ $p->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
