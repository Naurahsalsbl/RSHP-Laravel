@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Dashboard Administrator</h2>
    <p>Selamat datang, {{ Auth::user()->nama }}!</p>
</div>
@endsection
