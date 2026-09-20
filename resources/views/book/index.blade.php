@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>

    @if (count($books) > 0)

        <ul>
            @foreach ($books as $book)
                <li>
                {{ $book['title'] }} - 
                {{ $book['author'] }} -
                {{ $book['year'] }}
                </li>
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