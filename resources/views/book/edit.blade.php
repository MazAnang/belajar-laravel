<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Form Edit Buku</h1>
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
    <br><br>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ $book->title }}" required>
        </div><br>

        <div>
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ $book->author }}" required>
        </div><br>

        <div>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" value="{{ $book->year }}" required>
        </div><br>

        <div>
            <label>Stok:</label><br>
            <input type="number" name="stock" value="{{ $book->stock }}" required>
        </div><br>

        <button type="submit">Update Data</button>
    </form>
</body>
</html>