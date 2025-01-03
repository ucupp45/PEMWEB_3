<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Mata Pelajaran</h1>

        <!-- Form untuk menambah mata pelajaran -->
        {{-- <form id="mataPelajaranForm" action="{{ route('mata_pelajaran.create') }}" method="POST"> --}}
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mata Pelajaran</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Mata Pelajaran</button>
        </form>

        <hr>

        <!-- Daftar mata pelajaran -->
        <h2 class="mt-4">Daftar Mata Pelajaran</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mapel as $item)
                    <tr>
                        <td>{{ $item->mapel }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <form action="" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
