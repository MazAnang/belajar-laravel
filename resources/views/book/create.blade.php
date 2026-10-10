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
        </div><br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>