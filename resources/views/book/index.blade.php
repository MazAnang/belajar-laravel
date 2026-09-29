@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>

    @if (count($books) > 0)

        <ul>
            <!-- @foreach ($books as $book)
                <li>
                {{ $book['title'] }} - 
                {{ $book['author'] }} -
                {{ $book['year'] }}
                </li>
            @endforeach -->
            @foreach ($books as $book)
            <h3>{{ $book->title }}</h3>
            <p>Penulis: {{ $book->author }}</p>
            <p>Tahun: {{ $book->year }}</p>
            <p>Stok: {{ $book->stock }}</p>
            @endforeach
        </ul>

    @else

        <p>Tidak ada buku yang tersedia.</p>

    @endif

    <p>Ini adalah halaman daftar buku.</p>
    
    @if ($stock > 0)
    <p>Buku tersedia.</p>
    @else
        <p>Buku sedang habis.</p>
    @endif
@endsection