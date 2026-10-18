@extends('layouts.app')

@section('content')

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <h1>{{ $title }}</h1>

    <a href="{{ route('books.create') }}">Tambah Buku</a>
    <br><br>

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

            <p>
            <a href="{{ route('books.edit', $book) }}">Edit</a>
            <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form> 
            </p>
            <hr>
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