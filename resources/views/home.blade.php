@extends('main')

@section('title', 'Home')

@section('content')
    <section id="home">
        <h2>Selamat Datang di RSHP Universitas Airlangga</h2>
        <p>Rumah Sakit Hewan dibentuk di Fakultas Kedokteran Hewan Universitas Airlangga secara resmi berdiri pada tanggal 1 Januari 1972 berdasarkan SK Menteri Pendidikan dan Kebudayaan Republik Indonesia . Saat itu masih berupa klinik hewan yang menjadi bagian dari Departemen Klinik Veteriner, dimana klinik hewan ini juga menjadi wahana belajar mahasiswa Fakultas Kedokteran Hewan baik program S1 Kedokteran Hewan maupun Program Profesi Dokter Hewan atau lebih dikenal sebagai program Ko-Asistensi.</p>
        <img src="{{ asset('images/rshp.jpeg') }}" alt="RSHP Universitas Airlangga">
    </section>
@endsection