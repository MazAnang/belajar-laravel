<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';

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
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:'.date('Y'),
            'stock' => 'required|integer|min:0',
        ]);
        
         Book::create($validated);

        return redirect()
        ->route('books.index')
        ->with ('success', 'Data Buku berhasil ditambahkan.');
    }

    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:'.date('Y'),
            'stock' => 'required|integer|min:0',
        ]);
        
         $book->update($validated);

        return redirect()
        ->route('books.index')
        ->with ('success', 'Data Buku berhasil diperbarui.');
    }
    

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
