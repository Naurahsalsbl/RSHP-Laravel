@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Dokter</h2>
    <p>Selamat datang, {{ Auth::user()->nama }}!</p>

    <h3>Data Pasien</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>No. HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataPasien as $index => $pasien)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->no_hp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
