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

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabel Nilai --}}
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

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection