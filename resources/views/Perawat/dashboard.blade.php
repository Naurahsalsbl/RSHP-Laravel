@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Perawat</h2>
    <p>Selamat datang, {{ Auth::user()->nama }}!</p>

    <h3>Data Perawatan</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Tanggal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataPerawatan as $index => $p)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $p->nama_pasien }}</td>
                <td>{{ $p->tanggal }}</td>
                <td>{{ $p->tindakan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
