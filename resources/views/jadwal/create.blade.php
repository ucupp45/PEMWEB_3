<!DOCTYPE html>
<html>

<head>
    <title>Tambah Jadwal</title>
</head>

<body>
    <h1>Tambah Jadwal Kegiatan</h1>
    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf
        <label for="nama_kegiatan">Nama Kegiatan:</label>
        <input type="text" name="nama_kegiatan" required>
        <br>
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" required>
        <br>
        <label for="waktu">Waktu:</label>
        <input type="time" name="
                <label for="waktu">Waktu:</label>
        <input type="time" name="waktu" required>
        <br>
        <label for="tempat">Tempat:</label>
        <input type="text" name="tempat" required>
        <br>
        <button type="submit">Simpan Jadwal</button>
    </form>
    <br>
    <a href="{{ route('jadwal.index') }}">Kembali ke Daftar Jadwal</a>
</body>

</html>
