@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Administrator</h2>
    <p>Selamat datang, {{ Auth::user()->name }}!</p>
</div>
@endsection
