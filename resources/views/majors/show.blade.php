<!DOCTYPE html>
<html>
<head>
    <title>Detail Jurusan</title>
</head>
<body>
    <h1>Detail Jurusan</h1>

    <p><strong>Nama:</strong> {{ $major->name }}</p>
    <p><strong>Kode:</strong> {{ $major->code }}</p>
    <p><strong>Deskripsi:</strong> {{ $major->description }}</p>

    <a href="{{ route('majors.index') }}">Kembali</a>
</body>
</html>
