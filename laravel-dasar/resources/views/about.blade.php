@extends('layout.main')

@section('container')
    <h2>Halaman About</h2>
    <h1>Nama : {{ $name }}</h1>
    <h1>Email : {{ $email }}</h1>
    <img src="img/{{ $gambar }}" alt="{{ $name }}" width="300" class="img-thumbnail rounded-circle">
@endsection


