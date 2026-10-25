<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';

        $books = Book::with('category')->get();

        $stock = 7;

        return view('book.index', compact('title', 'books', 'stock'));
    }
    public function show($id)
    {
        return view('book.show', compact('id'));
    }

    public function create()
    {
        $title = 'Tambah Buku';
        $categories = Category::orderBy('name')->get();
        return view('book.create', compact('title', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:'.date('Y'),
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);
        
         Book::create($validated);

        return redirect()
        ->route('books.index')
        ->with ('success', 'Data Buku berhasil ditambahkan.');
    }

    public function edit(Book $book)
    {
        $title = 'Edit Buku';
        $categories = Category::orderBy('name')->get();
        return view('book.edit', compact('book', 'title', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:'.date('Y'),
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',

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
