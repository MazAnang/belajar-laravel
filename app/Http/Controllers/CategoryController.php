<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $title = 'Daftar Kategori';
        $categories = Category::all(); 
        return view('category.index', compact('title', 'categories'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan ke database
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan!');
    }

    
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Cek apakah kategori ini masih dipakai di tabel buku
        if ($category->books()->exists()) {
            return redirect()->back()->with('error', 'Kategori tidak bisa dihapus karena masih digunakan oleh data buku!');
        }

        $category->delete();

        return redirect()->back()->with('success', 'Kategori berhasil dihapus!');
    }
}