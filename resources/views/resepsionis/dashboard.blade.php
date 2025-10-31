@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Resepsionis</h2>
    <p>Selamat datang, {{ Auth::user()->nama }}!</p>
</div>
@endsection
