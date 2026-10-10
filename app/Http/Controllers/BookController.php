<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';
        // $books = [
        //     [
        //         'title' => 'Laravel untuk Pemula',
        //         'author' => 'Andi',
        //         'year' => 2024,
        //     ],
        //     [
        //         'title' => 'Mahir Laravel dalam 24 Jam',
        //         'author' => 'Budi',
        //         'year' => 2023,
        //     ],
        //     [
        //         'title' => 'Belajar Laravel untuk Pemula',
        //         'author' => 'Citra',
        //         'year' => 2024,
        //     ],
        //     [
        //         'title' => 'Pemrograman PHP',
        //         'author' => 'Dedi',
        //         'year' => 2022,
        //     ],
        //     [
        //         'title' => 'Dasar-Dasar Web',
        //         'author' => 'Eko',
        //         'year' => 2023,
        //     ],
        //     [
        //         'title' => 'Pemrograman Web Lanjut',
        //         'author' => 'Fajar',
        //         'year' => 2024,
        //     ],
        //     [
        //         'title' => 'Framework Laravel',
        //         'author' => 'Gita',
        //         'year' => 2023,
        //     ],
        //     [
        //         'title' => 'Mahir PHP dan Laravel',
        //         'author' => 'Hendra',
        //         'year' => 2024,
        //     ],
        // ];

        $books = Book::all();

        $stock = 7;

        return view('book.index', compact('title', 'books', 'stock'));
    }
    public function show($id)
    {
        return view('book.show', compact('id'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        
         Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
        ]);

        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
        ]);

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
