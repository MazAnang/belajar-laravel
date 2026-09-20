<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Daftar Kategori';
        $categories = [
            'Pemrograman',
            'Database',
            'Framework',
            'Jaringan Komputer',
            'Sistem Informasi',
        ];
        return view('category.index', compact('title', 'categories'));
    }
}
