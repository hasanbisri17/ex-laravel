@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>Nama : {{ $nama }}</h3>
    <p>Email : {{ $email }}</p>
    <img src="img/{{ $gambar }}" alt="{{ $nama }}" width="200">
@endsection
