<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $booksCount = 8; // Jumlah buku
        $memberCount = 5; // Jumlah member 
        $categoryCount = 5 ; // Jumlah kategori
        return view('dashboard.index', compact(
            'booksCount', 
            'memberCount', 
            'categoryCount'));
    }
}