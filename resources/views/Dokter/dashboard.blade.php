@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Dokter</h2>
    <p>Selamat datang, {{ Auth::user()->nama }}!</p>
</div>
@endsection
