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
        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Nilai</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Mata Pelajaran</th>
                                            <th>NIlai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($data_nilai as $item)
                                            <tr>
                                                <td>{{ $item->siswa_id }}</td>
                                                <td>{{ $item->pelajaran_id }}</td>
                                                <td>{{ $item->nilai }}</td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                                {{ $data_siswa->withQueryString()->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Input Nilai --}}
        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Input Penilaian</h3>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-4">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Siswa</th>
                                                <th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>ALVIN NUR ALABAL</td>
                                                <td><input type="number" class="form-control" value="90"></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>AMALIA</td>
                                                <td><input type="number" class="form-control" value="92"></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>ANANDA LESTARI</td>
                                                <td><input type="number" class="form-control" value="85"></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>DENI NUR ADRIAN</td>
                                                <td><input type="number" class="form-control" value="88"></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>ERA NUR AIDARAH</td>
                                                <td><input type="number" class="form-control" value="91"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-end mt-4">
                                        <button class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                <br>{{ $data_siswa->withQueryString()->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Nilai Akhir --}}
        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Nilai Akhir</h3>
                            <!-- Tombol untuk menambah siswa baru -->
                            {{-- <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered mt-4">
                                    <thead class="table-header">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>KKM</th>
                                            <th>Penghayatan</th>
                                            <th>Keterampilan</th>
                                            <th>Nilai</th>
                                            <th>Predikat</th>
                                            <th>Aksi</th> <!-- Kolom untuk tombol aksi -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($data_siswa as $siswa)
                                            <!-- Melakukan iterasi untuk setiap siswa -->
                                            <tr>
                                                <td>{{ $loop->iteration }}</td> <!-- Menampilkan nomor urut -->
                                                <td>{{ $siswa->nama }}</td> <!-- Menampilkan nama siswa -->
                                                <td>{{ $siswa->kkm }}</td> <!-- Menampilkan KKM -->
                                                <td>{{ $siswa->penghayatan }}</td> <!-- Menampilkan penghayatan -->
                                                <td>{{ $siswa->keterampilan }}</td> <!-- Menampilkan keterampilan -->
                                                <td>{{ $siswa->nilai }}</td> <!-- Menampilkan nilai -->
                                                <td>{{ $siswa->predikat }}</td> <!-- Menampilkan predikat -->
                                                <td>
                                                    <!-- Tombol untuk mengedit data siswa -->
                                                    <a href="{{ route('siswa.edit', $siswa->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <!-- Form untuk menghapus data siswa -->
                                                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf <!-- Token CSRF untuk keamanan -->
                                                        @method('DELETE') <!-- Menentukan metode DELETE -->
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                        <!-- Tombol hapus -->
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


        {{-- Kehadiran --}}
        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Kehadiran Siswa</h3>
                            <a href="3" class="btn btn-primary">Tambah Kehadiran</a>
                            <a href="#" class="btn btn-secondary">Laporan Kehadiran</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered mt-4">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Status Kehadiran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($data_kehadiran as $kehadiran)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>{{ $kehadiran->siswa->nama }}</td>
                                              <td>{{ $kehadiran->mapel->nama }}</td>
                                              <td>{{ $kehadiran->hadir ? 'Hadir' : 'Tidak Hadir' }}</td>
                                              <td>
                                                  <form action="{{ route('kehadiran.destroy', $kehadiran->id) }}" method="POST" style="display:inline;">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" class="btn btn-danger">Hapus</button>
                                                  </form>
                                              </td>
                                          </tr> --}}
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                                {{ $data_siswa->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
