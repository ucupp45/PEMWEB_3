<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- @if (auth()->user()->hasRole('admin'))
            USER
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mt-5">
                    <div class="mb-3">
                        <h1 style="font-size: 200%">Data Users</h1>
                    </div>
                    <!-- Search Bar -->
                    <form action="{{ route('users.index') }}" method="GET" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control"
                                placeholder="Cari nama atau email..." value="{{ $search ?? '' }}">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>
                                        <button class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editUser Modal{{ $user->id }}">Edit</button>

                                        <form action="{{ route('users.destroy', $user) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal Edit User -->
                                <div class="modal fade" id="editUser Modal{{ $user->id }}" tabindex="-1"
                                    aria-labelledby="editUser ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editUser ModalLabel">Edit User</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('users.update', $user) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ $user->name }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" name="email" class="form-control"
                                                            value="{{ $user->email }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="password" name="password" class="form-control"
                                                            value="{{ $user->password }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>

                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                        data-bs-target="#addUser Modal">Tambah User</button>

                    <!-- Modal Tambah User -->
                    <div class="modal fade" id="addUser Modal" tabindex="-1" aria-labelledby="addUser ModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addUser ModalLabel">Tambah User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('users.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label ">Name</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif --}}

            @if (auth()->user()->hasRole('siswa'))
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mt-5 mb-3">
                        <div class="mb-3 text-center">
                            <h1 style="font-size: 200%">Grafik Kesehatan Siswa</h1>
                        </div>
                        <canvas id="kesehatanChart" width="400" height="200"></canvas>
                        <script>
                            const ctx = document.getElementById('kesehatanChart').getContext('2d');
                            const kesehatanChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: @json($labels), // Data label dari controller
                                    datasets: [{
                                        label: 'Perkembangan Kesehatan',
                                        data: @json($data), // Data kesehatan dari controller
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        borderWidth: 2,
                                        fill: false,
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>

                </div>
            @endif

            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('guru'))
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mt-5 mb-3">
                        <div class="mb-3 text-center">
                            <h1 style="font-size: 200%">Grafik Kesehatan Siswa</h1>
                        </div>
                        <canvas id="imtChart" width="400" height="200"></canvas>
                        <script>
                            const ctx = document.getElementById('imtChart').getContext('2d');
                            const imtChart = new Chart(ctx, {
                                type: 'bar', // Tipe grafik (bar, line, pie, dll)
                                data: {
                                    labels: {!! json_encode($labels) !!}, // Label dari kategori IMT
                                    datasets: [{
                                        label: 'Jumlah Siswa',
                                        data: {!! json_encode($data) !!}, // Data jumlah siswa per kategori
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>

                </div>
            @endif

            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('guru') || auth()->user()->hasRole('siswa'))
                {{-- SISWA --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                    <div class="container mt-5 mb-3">
                        <div class="mb-3">
                            <h1 style="font-size: 200%">Data Siswa</h1>
                        </div>
                        @if (auth()->user()->hasRole('admin'))
                            <!-- Search Bar -->
                            <form id="searchForm" method="GET" class="mb-4">
                                <div class="input-group">
                                    <input type="text" id="searchInput" name="search" class="form-control" placeholder="Cari siswa..." autocomplete="off">
                                    <button type="button" class="btn btn-primary" id="searchButton">Search</button>
                                </div>
                            </form>

                            <!-- Modal for Search Results -->
                            <div class="modal fade" id="searchResultsModal" tabindex="-1"
                                aria-labelledby="searchResultsLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="searchResultsLabel">Hasil Pencarian</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nama</th>
                                                        <th>Alamat</th>
                                                        <th>Gender</th>
                                                        <th>Tanggal Lahir</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="searchResultsTable">
                                                    <!-- Hasil pencarian akan dimasukkan di sini -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Gender</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Tanggal Lahir</th>
                                    @if (auth()->user()->hasRole('admin'))
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $s)
                                    <tr>
                                        <td>{{ $s->user_id }}</td>
                                        <td>{{ $s->nama }}</td>
                                        <td>{{ $s->alamat }}</td>
                                        <td>{{ $s->gender }}</td>
                                        <td>{{ $s->nama_ortu }}</td>
                                        <td>{{ $s->tanggal_lahir }}</td>
                                        @if (auth()->user()->hasRole('admin'))
                                            <td>
                                                <button class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editSiswaModal{{ $s->id }}">Edit</button>

                                                <form action="{{ route('siswa.destroy', $s) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>

                                    <!-- Modal Edit Siswa -->
                                    <div class="modal fade" id="editSiswaModal{{ $s->id }}" tabindex="-1"
                                        aria-labelledby="editSiswaModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editSiswaModalLabel">Edit Siswa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('siswa.update', $s) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="user_id" class="form-label">Pilih
                                                                User</label>
                                                            <select name="user_id" class="form-select" required>
                                                                @foreach ($user as $u)
                                                                    <option value="{{ $u->id }}"
                                                                        {{ $s->user_id == $u->id ? 'selected' : '' }}>
                                                                        {{ $u->name }} ({{ $u->email }})
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" name="nama" class="form-control"
                                                                value="{{ $s->nama }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <input type="text" name="alamat" class="form-control"
                                                                value="{{ $s->alamat }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="gender" class="form-label">Gender</label>
                                                            <select name="gender" class="form-select" required>
                                                                <option value="P"
                                                                    {{ $s->gender == 'P' ? 'selected' : '' }}>
                                                                    Perempuan
                                                                </option>
                                                                <option value="L"
                                                                    {{ $s->gender == 'L' ? 'selected' : '' }}>
                                                                    Laki-laki
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nama_ortu" class="form-label">Nama Orang
                                                                Tua</label>
                                                            <input type="text" name="nama_ortu"
                                                                class="form-control" value="{{ $s->nama_ortu }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tanggal_lahir" class="form-label">Tanggal
                                                                Lahir</label>
                                                            <input type="date" name="tanggal_lahir"
                                                                class="form-control" value="{{ $s->tanggal_lahir }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $siswa->links() }}

                        @if (auth()->user()->hasRole('admin'))
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#addSiswaModal">Tambah Siswa</button>
                            <a href="{{ route('siswa.export') }}" class="btn btn-success mb-3">Export Data Siswa</a>
                        @endif

                        <!-- Modal Tambah Siswa -->
                        <div class="modal fade" id="addSiswaModal" tabindex="-1"
                            aria-labelledby="addSiswaModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSiswaModalLabel">Tambah Siswa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('siswa.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="user_id" class="form-label">Pilih User</label>
                                                <select name="user_id" class="form-select" required>
                                                    <option value="">-- Pilih User --</option>
                                                    @foreach ($user as $u)
                                                        <option value="{{ $u->id }}">{{ $u->id }} :
                                                            {{ $u->name }} ({{ $u->email }})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select name="gender" class="form-select" required>
                                                    <option value="P">Perempuan</option>
                                                    <option value="L">Laki-laki</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama_ortu" class="form-label">Nama Orang Tua</label>
                                                <input type="text" name="nama_ortu" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (auth()->user()->hasRole('admin'))
                {{-- GURU --}}
                <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mt-5 mb-3">
                        <div class="mb-3">
                            <h1 style="font-size: 200%">Data Guru</h1>
                        </div>
                        {{-- <!-- Search Bar -->
                        <form action="{{ route('guru.index') }}" method="GET" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Cari nama atau alamat..." value="{{ $search ?? '' }}">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </form> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Gender</th>
                                    <th>Pendidikan</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guru as $g)
                                    <tr>
                                        <td>{{ $g->user_id }}</td>
                                        <td>{{ $g->nama }}</td>
                                        <td>{{ $g->alamat }}</td>
                                        <td>{{ $g->gender }}</td>
                                        <td>{{ $g->pendidikan }}</td>
                                        <td>{{ $g->tanggal_lahir }}</td>
                                        <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editGuruModal{{ $g->id }}">Edit</button>

                                            <form action="{{ route('guru.destroy', $g) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit Guru -->
                                    <div class="modal fade" id="editGuruModal{{ $g->id }}" tabindex="-1"
                                        aria-labelledby="editGuruModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editGuruModalLabel">Edit Guru</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('guru.update', $g) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="user_id" class="form-label">Pilih
                                                                User</label>
                                                            <select name="user_id" class="form-select" required>
                                                                @foreach ($user as $u)
                                                                    <option value="{{ $u->id }}"
                                                                        {{ $g->user_id == $u->id ? 'selected' : '' }}>
                                                                        {{ $u->name }} ({{ $u->email }})
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" name="nama" class="form-control"
                                                                value="{{ $g->nama }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <input type="text" name="alamat" class="form-control"
                                                                value="{{ $g->alamat }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="gender" class="form-label">Gender</label>
                                                            <select name="gender" class="form-select" required>
                                                                <option value="P"
                                                                    {{ $g->gender == 'P' ? 'selected' : '' }}>Perempuan
                                                                </option>
                                                                <option value="L"
                                                                    {{ $g->gender == 'L' ? 'selected' : '' }}>Laki-laki
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="pendidikan"
                                                                class="form-label">Pendidikan</label>
                                                            <input type="text" name="pendidikan"
                                                                class="form-control" value="{{ $g->pendidikan }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tanggal _lahir" class="form-label">Tanggal
                                                                Lahir</label>
                                                            <input type="date" name="tanggal_lahir"
                                                                class="form-control" value="{{ $g->tanggal_lahir }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $guru->links() }}

                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#addGuruModal">Tambah Guru</button>
                        <a href="{{ route('guru.export') }}" class="btn btn-success mb-3">Export Data Guru</a>

                        <!-- Modal Tambah Guru -->
                        <div class="modal fade" id="addGuruModal" tabindex="-1" aria-labelledby="addGuruModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addGuruModalLabel">Tambah Guru</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('guru.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="user_id" class="form-label">Pilih User</label>
                                                <select name="user_id" class="form-select" required>
                                                    <option value="">-- Pilih User --</option>
                                                    @foreach ($user as $u)
                                                        <option value="{{ $u->id }}">{{ $u->id }} :
                                                            {{ $u->name }} ({{ $u->email }})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select name="gender" class="form-select" required>
                                                    <option value="P">Perempuan</option>
                                                    <option value="L">Laki-laki</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="pendidikan" class="form-label">Pendidikan</label>
                                                <input type="text" name="pendidikan" class="form-control"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('guru') || auth()->user()->hasRole('siswa'))
                {{-- Pelajaran --}}
                <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mt-5 mb-3">
                        <div class="mb-3">
                            <h1 style="font-size: 200%">Data Pelajaran</h1>
                        </div>
                        {{-- <!-- Search Bar -->
                        <form action="{{ route('pelajaran.index') }}" method="GET" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Cari nama atau alamat..." value="{{ $search ?? '' }}">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </form> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pelajaran ID</th>
                                    <th>Guru ID</th>
                                    <th>Nama</th>
                                    {{-- <th>Ruangan</th> --}}
                                    <th>Keterangan</th>
                                    @if (auth()->user()->hasRole('admin'))
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelajaran as $p)
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->guru_id }}</td>
                                        <td>{{ $p->nama }}</td>
                                        {{-- <td>{{ $p->ruangan }}</td> --}}
                                        <td>{{ $p->keterangan }}</td>
                                        @if (auth()->user()->hasRole('admin'))
                                            <td>
                                                <button class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editPelajaranModal{{ $p->id }}">Edit</button>

                                                <form action="{{ route('pelajaran.destroy', $p) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>

                                    <!-- Modal Edit Pelajaran -->
                                    <div class="modal fade" id="editPelajaranModal{{ $p->id }}"
                                        tabindex="-1" aria-labelledby="editPelajaranModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editPelajaranModalLabel">Edit
                                                        Pelajaran
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('pelajaran.update', $p) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="guru_id" class="form-label">Guru</label>
                                                            <select name="guru_id" class="form-select" required>
                                                                @foreach ($guru as $u)
                                                                    <option value="{{ $u->id }}"
                                                                        {{ $p->guru_id == $u->id ? 'selected' : '' }}>
                                                                        {{ $u->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" name="nama" class="form-control"
                                                                value="{{ $p->nama }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="ruangan" class="form-label">Ruangan</label>
                                                            <input type="text" name="ruangan" class="form-control"
                                                                value="{{ $p->ruangan }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="keterangan"
                                                                class="form-label">Keterangan</label>
                                                            <input type="text" name="keterangan"
                                                                class="form-control" value="{{ $p->keterangan }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $pelajaran->links() }}
                        @if (auth()->user()->hasRole('admin'))
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#addPelajaranModal">Tambah Pelajaran</button>
                        @endif
                        <!-- Modal Tambah Pelajaran -->
                        <div class="modal fade" id="addPelajaranModal" tabindex="-1"
                            aria-labelledby="addPelajaranModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addPelajaranModalLabel">Tambah Pelajaran</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('pelajaran.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="guru_id" class="form-label">Guru</label>
                                                <select name="guru_id" class="form-select" required>
                                                    <option value="">-- Pilih Guru --</option>
                                                    @foreach ($guru as $u)
                                                        <option value="{{ $u->id }}">{{ $u->id }} :
                                                            {{ $u->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ruangan" class="form-label">Ruangan</label>
                                                <input type="text" name="ruangan" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" name="keterangan" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('guru') || auth()->user()->hasRole('siswa'))
                {{-- Nilai --}}
                <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mt-5 mb-3">
                        <div class="mb-3">
                            <h1 style="font-size: 200%">Data Nilai</h1>
                        </div>
                        {{-- <!-- Search Bar -->
                        <form action="{{ route('nilai.index') }}" method="GET" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Cari nama atau alamat..." value="{{ $search ?? '' }}">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </form> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pelajaran ID</th>
                                    <th>Siswa ID</th>
                                    <th>Nilai</th>
                                    <th>Kategori</th>
                                    <th>Keterangan</th>
                                    @if (auth()->user()->hasRole('admin'))
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilai as $n)
                                    <tr>
                                        <td>{{ $n->pelajaran_id }}</td>
                                        <td>{{ $n->siswa_id }}</td>
                                        <td>{{ $n->nilai }}</td>
                                        <td>{{ $n->kategori }}</td>
                                        <td>{{ $n->keterangan }}</td>
                                        @if (auth()->user()->hasRole('admin'))
                                            <td>
                                                <button class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editNilaiModal{{ $n->id }}">Edit</button>

                                                <form action="{{ route('nilai.destroy', $n) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>

                                    <!-- Modal Edit Nilai -->
                                    <div class="modal fade" id="editNilaiModal{{ $n->id }}" tabindex="-1"
                                        aria-labelledby="editNilaiModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editNilaiModalLabel">Edit Nilai</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('nilai.update', $n) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="pelajaran_id" class="form-label">Pilih
                                                                Pelajaran</label>
                                                            <select name="pelajaran_id" class="form-select" required>
                                                                @foreach ($pelajaran as $u)
                                                                    <option value="{{ $u->id }}"
                                                                        {{ $n->pelajaran_id == $u->id ? 'selected' : '' }}>
                                                                        {{ $u->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="siswa_id" class="form-label">Pilih
                                                                Siswa</label>
                                                            <select name="siswa_id" class="form-select" required>
                                                                @foreach ($siswas as $u)
                                                                    <option value="{{ $u->siswas_id }}"
                                                                        {{ $n->siswa_id == $u->siswas_id ? 'selected' : '' }}>
                                                                        {{ $u->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nilai" class="form-label">Nilai</label>
                                                            <input type="number" name="nilai" class="form-control"
                                                                value="{{ $n->nilai }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kategori" class="form-label">Kategori</label>
                                                            <input type="text" name="kategori"
                                                                class="form-control" value="{{ $n->kategori }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="keterangan"
                                                                class="form-label">Keterangan</label>
                                                            <input type="text" name="keterangan"
                                                                class="form-control" value="{{ $n->Keterangan }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $nilai->links() }}
                        @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('guru'))
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#addNilaiModal">Tambah Nilai</button>
                        @endif
                        <!-- Modal Tambah Nilai -->
                        <div class="modal fade" id="addNilaiModal" tabindex="-1"
                            aria-labelledby="addNilaiModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addNilaiModalLabel">Tambah Nilai</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('nilai.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="pelajaran_id" class="form-label">Pelajaran</label>
                                                <select name="pelajaran_id" class="form-select" required>
                                                    <option value="">-- Pilih Pelajaran</option>
                                                    @foreach ($pelajaran as $u)
                                                        <option value="{{ $u->id }}">{{ $u->id }} :
                                                            {{ $u->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="siswa_id" class="form-label">Siswa</label>
                                                <select name="siswa_id" class="form-select" required>
                                                    <option value="">-- Pilih siswa</option>
                                                    @foreach ($siswas as $u)
                                                        <option value="{{ $u->siswas_id }}">{{ $u->siswas_id }} :
                                                            {{ $u->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nilai" class="form-label">Nilai</label>
                                                <input type="number" name="nilai" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kategori" class="form-label">Kategori</label>
                                                <input type="text" name="kategori" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" name="keterangan" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('guru') || auth()->user()->hasRole('siswa'))
                {{-- Jadwal --}}
                <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mt-5 mb-3">
                        <div class="mb-3">
                            <h1 style="font-size: 200%">Jadwal</h1>
                        </div>
                        {{-- <!-- Search Bar -->
                        <form action="{{ route('jadwal.index') }}" method="GET" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Cari nama atau alamat..." value="{{ $search ?? '' }}">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </form> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pelajaran ID</th>
                                    <th>Guru ID</th>
                                    <th>Ruangan</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    @if (auth()->user()->hasRole('admin'))
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwal as $n)
                                    <tr>
                                        <td>{{ $n->pelajaran_id }}</td>
                                        <td>{{ $n->guru_id }}</td>
                                        <td>{{ $n->ruangan }}</td>
                                        <td>{{ $n->waktu_mulai }}</td>
                                        <td>{{ $n->waktu_selesai }}</td>
                                        @if (auth()->user()->hasRole('admin'))
                                            <td>
                                                <button class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editJadwalModal{{ $n->id }}">Edit</button>

                                                <form action="{{ route('jadwal.destroy', $n) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>

                                    <!-- Modal Edit Jadwal -->
                                    <div class="modal fade" id="editJadwalModal{{ $n->id }}" tabindex="-1"
                                        aria-labelledby="editJadwalModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editJadwalModalLabel">Edit Jadwal</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('jadwal.update', $n) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="pelajaran_id" class="form-label">Pilih
                                                                Pelajaran</label>
                                                            <select name="pelajaran_id" class="form-select" required>
                                                                @foreach ($pelajarans as $u)
                                                                    <option value="{{ $u->pelajarans_id }}"
                                                                        {{ $n->pelajaran_id == $u->pelajarans_id ? 'selected' : '' }}>
                                                                        {{ $u->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="guru_id" class="form-label">Pilih
                                                                Guru</label>
                                                            <select name="guru_id" class="form-select" required>
                                                                @foreach ($gurus as $u)
                                                                    <option value="{{ $u->gurus_id }}"
                                                                        {{ $n->guru_id == $u->gurus_id ? 'selected' : '' }}>
                                                                        {{ $u->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="ruangan" class="form-label">Ruangan</label>
                                                            <input type="text" name="ruangan" class="form-control"
                                                                value="{{ $n->ruangan }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="waktu_mulai" class="form-label">Waktu
                                                                Mulai</label>
                                                            <input type="datetime-local" name="waktu_mulai"
                                                                class="form-control" value="{{ $n->waktu_mulai }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="waktu_selesai" class="form-label">Waktu
                                                                Selesai</label>
                                                            <input type="tdatetime-local" name="waktu_selesai"
                                                                class="form-control" value="{{ $n->waktu_selesai }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $jadwal->links() }}
                        @if (auth()->user()->hasRole('admin'))
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#addJadwalModal">Tambah Jadwal</button>
                        @endif
                        <!-- Modal Tambah Jadwal -->
                        <div class="modal fade" id="addJadwalModal" tabindex="-1"
                            aria-labelledby="addJadwalModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addJadwalModalLabel">Tambah Jadwal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('jadwal.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="pelajaran_id" class="form-label">Pelajaran</label>
                                                <select name="pelajaran_id" class="form-select" required>
                                                    <option value="">-- Pilih Pelajaran</option>
                                                    @foreach ($pelajarans as $u)
                                                        <option value="{{ $u->pelajarans_id }}">
                                                            {{ $u->pelajarans_id }}:
                                                            {{ $u->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="guru_id" class="form-label">Guru</label>
                                                <select name="guru_id" class="form-select" required>
                                                    <option value="">-- Pilih guru</option>
                                                    @foreach ($gurus as $u)
                                                        <option value="{{ $u->gurus_id }}">{{ $u->gurus_id }} :
                                                            {{ $u->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ruangan" class="form-label">Ruangan</label>
                                                <input type="text" name="ruangan" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                                                <input type="datetime-local" name="waktu_mulai" class="form-control"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="waktu_selesai" class="form-label">Waktu Selesai</label>
                                                <input type="datetime-local" name="waktu_selesai"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('guru') || auth()->user()->hasRole('siswa'))
                {{-- Kesehatan --}}
                <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mt-5 mb-3">
                        <div class="mb-3">
                            <h1 style="font-size: 200%">Data Kesehatan</h1>
                        </div>
                        {{-- <!-- Search Bar -->
                        <form action="{{ route('kesehatan.index') }}" method="GET" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Cari nama atau alamat..." value="{{ $search ?? '' }}">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </form> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Siswa ID</th>
                                    <th>Berat Badan (cm)</th>
                                    <th>Tinggi Badan (cm)</th>
                                    <th>Index Massa Tubuh</th>
                                    <th>Keterangan</th>
                                    <th>Waktu</th>
                                    @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('admin'))
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kesehatan as $k)
                                    <tr>
                                        <td>{{ $k->siswa_id }}</td>
                                        <td>{{ $k->berat_badan }}</td>
                                        <td>{{ $k->tinggi_badan }}</td>
                                        <td>{{ $k->imt }}</td>
                                        <td>{{ $k->keterangan }}</td>
                                        <td>{{ $k->updated_at }}</td>
                                        <td>
                                            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('guru'))
                                                <button class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editKesehatanModal{{ $k->id }}">Edit</button>
                                            @endif
                                            @if (auth()->user()->hasRole('admin'))
                                                <form action="{{ route('kesehatan.destroy', $k) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Modal Edit Kesehatan -->
                                    <div class="modal fade" id="editKesehatanModal{{ $k->id }}"
                                        tabindex="-1" aria-labelledby="editKesehatanModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editKesehatanModalLabel">Edit
                                                        Kesehatan
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('kesehatan.update', $k) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="siswa_id" class="form-label">Siswa</label>
                                                            <select name="siswa_id" class="form-select" required>
                                                                @foreach ($siswas as $u)
                                                                    <option value="{{ $u->siswas_id }}"
                                                                        {{ $k->siswa_id == $u->siswas_id ? 'selected' : '' }}>
                                                                        {{ $u->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="berat_badan" class="form-label">Berat
                                                                Badan</label>
                                                            <input type="number" name="berat_badan"
                                                                class="form-control" value="{{ $k->berat_badan }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tinggi_badan" class="form-label">Tinggi
                                                                Badan</label>
                                                            <input type="number" name="tinggi_badan"
                                                                class="form-control" value="{{ $k->tinggi_badan }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="imt" class="form-label">Index Massa
                                                                Tubuh</label>
                                                            <input type="number" name="imt" class="form-control"
                                                                value="{{ $k->imt }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="keterangan"
                                                                class="form-label">Keterangan</label>
                                                            <input type="text" name="keterangan"
                                                                class="form-control" value="{{ $k->keterangan }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $kesehatan->links() }}
                        @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('guru'))
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#addKesehatanModal">Tambah Kesehatan</button>
                        @endif
                        <!-- Modal Tambah Kesehatan -->
                        <div class ="modal fade" id="addKesehatanModal" tabindex="-1"
                            aria-labelledby="addKesehatanModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addKesehatanModalLabel">Tambah Kesehatan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('kesehatan.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="siswa_id" class="form-label">Siswa</label>
                                                <select name="siswa_id" class="form-select" required>
                                                    <option value="">-- Pilih Siswa --</option>
                                                    @foreach ($siswas as $u)
                                                        <option value="{{ $u->siswas_id }}">{{ $u->siswas_id }} :
                                                            {{ $u->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_badan" class="form-label">Berat Badan</label>
                                                <input type="number" name="berat_badan" class="form-control"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                                                <input type="number" name="tinggi_badan" class="form-control"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="imt" class="form-label">Index Massa Tubuh</label>
                                                <input type="number" name="imt" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" name="keterangan" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('guru') || auth()->user()->hasRole('siswa'))
                {{-- Konsultasi --}}
                <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mt-5 mb-3">
                        <div class="mb-3">
                            <h1 style="font-size: 200%">Konsultasi</h1>
                        </div>
                        {{-- <!-- Search Bar -->
                        <form action="{{ route('konsultasi.index') }}" method="GET" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Cari nama atau alamat..." value="{{ $search ?? '' }}">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </form> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Siswa ID</th>
                                    <th>Guru ID</th>
                                    <th>Kategori</th>
                                    <th>Pesan</th>
                                    <th>Status</th>
                                    <th>Waktu</th>
                                    @if (auth()->user()->hasRole('admin'))
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konsultasi as $n)
                                    <tr>
                                        <td>{{ $n->siswa_id }}</td>
                                        <td>{{ $n->guru_id }}</td>
                                        <td>{{ $n->kategori }}</td>
                                        <td>{{ $n->pesan }}</td>
                                        <td>{{ $n->status }}</td>
                                        <td>{{ $n->updated_at }}</td>
                                        <td>
                                            @if (auth()->user()->hasRole('admin'))
                                                <button class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editKonsultasiModal{{ $n->id }}">Edit</button>
                                                <form action="{{ route('konsultasi.destroy', $n) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Modal Edit Konsultasi -->
                                    <div class="modal fade" id="editKonsultasiModal{{ $n->id }}"
                                        tabindex="-1" aria-labelledby="editKonsultasiModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editKonsultasiModalLabel">Edit
                                                        Konsultasi
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('konsultasi.update', $n) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="siswa_id" class="form-label">Pilih
                                                                Siswa</label>
                                                            <select name="siswa_id" class="form-select" required>
                                                                @foreach ($siswas as $u)
                                                                    <option value="{{ $u->siswas_id }}"
                                                                        {{ $n->siswa_id == $u->siswas_id ? 'selected' : '' }}>
                                                                        {{ $u->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="guru_id" class="form-label">Pilih
                                                                Guru</label>
                                                            <select name="guru_id" class="form-select" required>
                                                                @foreach ($gurus as $u)
                                                                    <option value="{{ $u->gurus_id }}"
                                                                        {{ $n->guru_id == $u->gurus_id ? 'selected' : '' }}>
                                                                        {{ $u->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kategori" class="form-label">Kategori</label>
                                                            <input type="text" name="kategori"
                                                                class="form-control" value="{{ $n->kategori }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="pesan" class="form-label">Pesan</label>
                                                            <input type="text" name="pesan" class="form-control"
                                                                value="{{ $n->pesan }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select name="status" class="form-select" required>
                                                                <option value="proses"
                                                                    {{ $n->status == 'proses' ? 'selected' : '' }}>
                                                                    Proses
                                                                </option>
                                                                <option value="selesai"
                                                                    {{ $n->status == 'selesai' ? 'selected' : '' }}>
                                                                    Selesai
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $konsultasi->links() }}
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#addKonsultasiModal">Tambah Konsultasi</button>

                        <!-- Modal Tambah Konsultasi -->
                        <div class="modal fade" id="addKonsultasiModal" tabindex="-1"
                            aria-labelledby="addKonsultasiModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addKonsultasiModalLabel">Tambah Konsultasi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('konsultasi.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="siswa_id" class="form-label">Siswa</label>
                                                <select name="siswa_id" class="form-select" required>
                                                    <option value="">-- Pilih siswa --</option>
                                                    @foreach ($siswas as $u)
                                                        <option value="{{ $u->siswas_id }}">
                                                            {{ $u->siswas_id }}:
                                                            {{ $u->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="guru_id" class="form-label">Guru</label>
                                                <select name="guru_id" class="form-select" required>
                                                    <option value="">-- Pilih Guru --</option>
                                                    @foreach ($gurus as $u)
                                                        <option value="{{ $u->gurus_id }}">{{ $u->gurus_id }} :
                                                            {{ $u->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kategori" class="form-label">Kategori</label>
                                                <input type="text" name="kategori" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="pesan" class="form-label">Pesan</label>
                                                <input type="text" name="pesan" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="status" class="form-label">Status</label>
                                                <select name="status" class="form-select" required>
                                                    <option value="proses">Proses</option>
                                                    <option value="selesai">Selesai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <script>
            document.getElementById('searchButton').addEventListener('click', function(e) {
                e.preventDefault();
                let query = document.getElementById('searchInput').value;

                // AJAX Request
                fetch(`{{ route('dashboard') }}?search=${query}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest' // Identify request as AJAX
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        let tableBody = document.getElementById('searchResultsTable');
                        tableBody.innerHTML = ''; // Clear previous results

                        if (data.siswa.length > 0) {
                            data.siswa.forEach(item => {
                                tableBody.innerHTML += `
                                <tr>
                                    <td>${item.id}</td>
                                    <td>${item.nama}</td>
                                    <td>${item.alamat}</td>
                                    <td>${item.gender}</td>
                                    <td>${item.tanggal_lahir}</td>
                                </tr>
                            `;
                            });
                        } else {
                            tableBody.innerHTML =
                                '<tr><td colspan="5" class="text-center">Tidak ada data ditemukan.</td></tr>';
                        }

                        // Show Modal
                        let searchResultsModal = new bootstrap.Modal(document.getElementById('searchResultsModal'));
                        searchResultsModal.show();
                    })
                    .catch(error => console.error('Error:', error));
            });
        </script>
</x-app-layout>
