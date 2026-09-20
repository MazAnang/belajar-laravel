<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $title = 'Daftar Member'; 
        $members = [
            'Anang',
            'Ihsan',
            'Rama',
            'Fahmi',
            'Reza'
        ];
        return view('member.index', compact('title', 'members'));
    }
    public function show($id)
    {
        return 'ID Member: ' . $id;
    }
}
