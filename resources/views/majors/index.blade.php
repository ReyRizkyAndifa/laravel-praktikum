<!DOCTYPE html>
<html>
<head>
    <title>Daftar Jurusan</title>
</head>
<body>
    <h1>Daftar Jurusan</h1>

    <a href="{{ route('majors.create') }}">+ Tambah Jurusan</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Kode</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($majors as $index => $major)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $major->name }}</td>
                <td>{{ $major->code }}</td>
                <td>{{ $major->description }}</td>
                <td>
                    <a href="{{ route('majors.show', $major) }}">Detail</a> |
                    <a href="{{ route('majors.edit', $major) }}">Edit</a> |
                    <form action="{{ route('majors.destroy', $major) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
