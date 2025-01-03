@extends('guru.master')  

@push('css')
        <!-- CSS for this page only -->
<link rel="stylesheet" href="../vendor/chart.js/dist/Chart.min.css">
<!-- End CSS  -->
@endpush

@section('content')
<div class="main-content">
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Data Siswa</h3>
                        <div class="pb-3">
                            <form class="d-flex" action="{{ url('siswa') }}" method="get">
                                <input class="form-control me-1" type="search" name="katakunci"
                                    value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci"
                                    aria-label="Search">
                                <button class="btn btn-secondary" type="submit">Cari</button>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
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


                        <!-- Modal Tambah Data -->
                        <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog"
                            aria-labelledby="tambahDataModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Siswa
                                        </h5>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="tambahSiswaForm" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="text" class="for m-control" id="nik"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender" required>
                                                    <option value="">Pilih Gender</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_orang_tua">Nama Orang Tua</label>
                                                <input type="text" class="form-control"
                                                    id="nama_orang_tua" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="no_tlp">No. Telepon</label>
                                                <input type="text" class="form-control" id="no_tlp"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tanggal_lahir"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" id="alamat" required></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary"
                                            id="simpanDataButton">Simpan Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('guru.setting')

    <footer>
        <span>SIMPA 2025</span>
    </footer>
    <div class="overlay action-toggle">
    </div>
</div>
@endsection