@extends('layouts.app')

@section('content')

    <h1>Library System Dashboard</h1>

    <p>Selamat datang di Sistem Informasi Perpustakaan.</p>

    <p>Jumlah Buku: {{ $booksCount }}</p>
    <p>Jumlah Member: {{ $memberCount }}</p>
    <p>Jumlah Kategori: {{ $categoryCount }}</p>

@endsection