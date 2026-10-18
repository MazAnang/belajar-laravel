<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Form Tambah Buku</h1>
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
    <br><br>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label>Judul Buku</label>
            <input
            type="text"
            name="title"
            value="{{ old('title') }}">
            @error('title')
            <p>{{ $message }}</p>
            @enderror
        </div><br>

        <div>
            <label>Penulis</label>
            <input
            type="text"
            name="author"
            value="{{ old('author') }}">
            @error('author')
            <p>{{ $message }}</p>
            @enderror
        </div><br>

        <div>
            <label>Tahun Terbit</label>
            <input
            type="number"
            name="year"
            value="{{ old('year') }}">
            @error('year')
            <p>{{ $message }}</p>
            @enderror 
        </div><br>

        <div>
            <label>Jumlah stok buku</label>
            <input
            type="number"
            name="stock"
            value="{{ old('stock') }}">
            @error('stock')
            <p>{{ $message }}</p>
            @enderror
        </div><br>

        <!-- <div>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" required>
        </div><br>

        <div>
            <label>Penulis:</label><br>
            <input type="text" name="author" required>
        </div><br>

        <div>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" required>
        </div><br>

        <div>
            <label>Stok:</label><br>
            <input type="number" name="stock" required>
        </div><br> -->

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>