@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Form Tambah Kategori Baru --}}
    <form action="{{ route('categories.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="form-group mb-2">
            <label for="name" class="form-label">Nama Kategori Baru:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama kategori" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kategori</button>
    </form>

    <hr>

    <h3>Daftar Kategori:</h3>
    <ul class="list-group">
        @forelse ($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $category->name }}
                
                {{-- Form Hapus Kategori --}}
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </li>
        @empty
            <li class="list-group-item text-muted">Belum ada data kategori.</li>
        @endforelse
    </ul>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@endsection