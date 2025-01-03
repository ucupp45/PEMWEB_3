<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h1, h2 {
            color: #343a40;
        }

        .form-label {
            font-weight: bold;
        }

        table th, table td {
            text-align: center;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Mata Pelajaran</h1>

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
            <div class="d-flex justify-content-end mb-4">
            <button type="submit" class="btn btn-primary">Tambah Mata Pelajaran</button>
            </div>
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