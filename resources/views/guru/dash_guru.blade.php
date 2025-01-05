@extends('layouts.master')

@push('css')
    <!-- CSS for this page only -->
    <link rel="stylesheet" href="../vendor/chart.js/dist/Chart.min.css">
    <!-- End CSS  -->
@endpush

@section('content')
    <div class="main-content">
        {{-- tabel siswa --}}
        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Siswa</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>Nama Orang Tua</th>
                                            <th>No. Tlp</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_siswa as $item)
                                            <tr>
                                                <td>{{ $item->nik }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->gender }}</td>
                                                <td>{{ $item->nama_orang_tua }}</td>
                                                <td>{{ $item->nomor_telepon }}</td>
                                                <td>{{ $item->tanggal_lahir }}</td>
                                                <td>{{ $item->alamat }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $data_siswa->withQueryString()->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- tabel nilai --}}
        {{-- Tabel Nilai --}}
        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Nilai</h3>
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#tambahNilaiModal">
                                Tambah Nilai
                            </button>
                            

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Nilai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_nilai as $item)
                                            <tr>
                                                <td>{{ $item->siswa->nama }}</td>
                                                <td>{{ $item->pelajaran->nama_pelajaran }}</td>
                                                <td>{{ $item->nilai }}</td>

                                                <td>
                                                    <button class="btn btn-warning" data-toggle="modal"
                                                        data-target="#editNilaiModal{{ $item->id }}">
                                                        Edit
                                                    </button>
                                                    <form action="{{ route('nilai.destroy', ['siswa_id' => $item->siswa_id, 'pelajaran_id' => $item->pelajaran_id]) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE') <!-- Menggunakan metode DELETE untuk penghapusan -->
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus nilai ini?')">Hapus Nilai</button>
                                                    </form>
                                                </td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $data_nilai->withQueryString()->links() }}
                            </div>

                            {{-- modal tambah --}}
                            <!-- The Modal -->
                            <div class="modal fade" id="tambahNilaiModal" tabindex="-1"
                                aria-labelledby="tambahNilaiModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tambahNilaiModalLabel">Tambah Nilai</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('guru.store_nilai') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="siswa_id">Siswa</label>
                                                    <select name="siswa_id" id="siswa_id" class="form-control" required>
                                                        <option value="">Pilih Siswa</option>
                                                        @foreach ($data_nilai as $item)
                                                            <option value="{{ $item->siswa->id }}">
                                                                {{ $item->siswa->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pelajaran_id">Pelajaran</label>
                                                    <select name="pelajaran_id" id="pelajaran_id" class="form-control"
                                                        required>
                                                        <option value="">Pilih Pelajaran</option>
                                                        @foreach ($data_nilai as $item)
                                                            <option value="{{ $item->pelajaran->id }}">
                                                                {{ $item->pelajaran->nama_pelajaran }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nilai">Nilai</label>
                                                    <input type="number" name="nilai" id="nilai" class="form-control"
                                                        required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Nilai</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Modal Edit Nilai -->
                            @foreach ($data_nilai as $item)
                                <div class="modal fade" id="editNilaiModal{{ $item->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="editNilaiModalLabel{{ $item->id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editNilaiModalLabel{{ $item->id }}">Edit
                                                    Nilai
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('nilai.update', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT') <!-- Menggunakan metode PUT untuk update -->

                                                    <div class="form-group">
                                                        <label for="siswa_id">Siswa</label>
                                                        <select name="siswa_id" id="siswa_id" class="form-control"
                                                            required>
                                                            <option value="">Pilih Siswa</option>
                                                            @foreach ($data_nilai as $item)
                                                                <option value="{{ $item->siswa->id }}"
                                                                    {{ $item->siswa->id == $item->siswa_id ? 'selected' : '' }}>
                                                                    {{ $item->siswa->nama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="pelajaran_id">Pelajaran</label>
                                                        <select name="pelajaran_id" id="pelajaran_id"
                                                            class="form-control" required>
                                                            <option value="">Pilih Pelajaran</option>
                                                            @foreach ($data_nilai as $item)
                                                                <option value="{{ $item->pelajaran->id }}"
                                                                    {{ $item->pelajaran->id == $item->pelajaran_id ? 'selected' : '' }}>
                                                                    {{ $item->pelajaran->nama_pelajaran }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="nilai">Nilai</label>
                                                        <input type="number" name="nilai" id="nilai"
                                                            class="form-control" value="{{ $item->nilai }}" required>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <a href="{{ route('guru.dash_guru') }}"
                                                            class="btn btn-secondary">Kembali</a>
                                                        <button type="submit" class="btn btn-primary">Perbarui
                                                            Nilai</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>





                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        {{-- Jadwal Kehadiran --}}
        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Jadwal Pelajaran</h3>
                            <!-- Tombol untuk menambah siswa baru -->
                            {{-- <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered mt-4">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>No</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Ruangan</th>
                                            <th>Hari</th>
                                            <th>Jam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($data_jadwal as $jadwal)
                                              <tr>
                                                  <td>{{ $loop->iteration }}</td>
                                                  <td>{{ $jadwal->mapel }}</td>
                                                  <td>{{ $jadwal->ruangan }}</td>
                                                  <td>{{ $jadwal->jam }}</td>
                                                  <td>
                                                      <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn btn-warning">Edit</a>
                                                      <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit" class="btn btn-danger">Hapus</button>
                                                      </form>
                                                  </td>
                                              </tr>
                                          @endforeach --}}
                                    </tbody>
                                </table>
                                <!-- Untuk pagination -->
                                {{ $data_siswa->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection
