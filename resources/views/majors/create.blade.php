<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jurusan</title>
</head>
<body>
    <h1>Tambah Jurusan</h1>

    <form action="{{ route('majors.store') }}" method="POST">
        @csrf
        <label>Nama Jurusan:</label><br>
        <input type="text" name="name" required><br>

        <label>Kode Jurusan:</label><br>
        <input type="text" name="code" required><br>

        <label>Deskripsi:</label><br>
        <textarea name="description"></textarea><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('majors.index') }}">Kembali</a>
</body>
</html>
