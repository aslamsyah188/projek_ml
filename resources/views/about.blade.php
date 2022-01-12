@extends('layouts.main')
@section('container')
        <div class="container mt-4">
        <h1>Halaman About</h1>
        <h5>Nama : {{ $nama }}</h5>
        <h5>Email : {{ $email }}</h5>
        <img src="img/{{ $img }}" alt="{{ $nama }}" width="300">
        </div>
@endsection