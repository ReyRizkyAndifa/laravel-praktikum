<!DOCTYPE html>
<html>
<head>
    <title>Edit Jurusan</title>
</head>
<body>
    <h1>Edit Jurusan</h1>

    <form action="{{ route('majors.update', $major) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Jurusan:</label><br>
        <input type="text" name="name" value="{{ $major->name }}" required><br>

        <label>Kode Jurusan:</label><br>
        <input type="text" name="code" value="{{ $major->code }}" required><br>

        <label>Deskripsi:</label><br>
        <textarea name="description">{{ $major->description }}</textarea><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('majors.index') }}">Kembali</a>
</body>
</html>
