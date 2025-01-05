<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Teknis - Jadwal</title>
</head>

<body>
    <h1>Jadwal Kegiatan</h1>
    <a href="{{ route('jadwal.create') }}">Tambah Jadwal</a>
    <table>
        <thead>
            <tr>
                <th>Nama Kegiatan</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Tempat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwals as $jadwal)
                <tr>
                    <td>{{ $jadwal->nama_kegiatan }}</td>
                    <td>{{ $jadwal->tanggal }}</td>
                    <td>{{ $jadwal->waktu }}</td>
                    <td>{{ $jadwal->tempat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
