<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../vendor/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../vendor/chart.js/dist/Chart.min.css">
    <link rel="stylesheet" href="../assets/css/style.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="../assets/css/dark.min.css">
</head>

<body>
    <div id="app">
        <div class="shadow-header"></div>
        <header class="header-navbar fixed">
            <div class="toggle-mobile action-toggle"><i class="fas fa-bars"></i></div>
            <div class="header-wrapper">
                <div class="header-left">
                    <div class="theme-switch-icon"></div>
                </div>
                <div class="header-content">
                    <div class="notification dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                        </a>
                        <ul class="dropdown-menu medium">
                            <li class="menu-header">
                                <a class="dropdown-item" href="#">Message</a>
                            </li>
                            <li class="menu-content ps-menu">
                                <!-- Messages here -->
                            </li>
                        </ul>
                    </div>
                    <div class="notification dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="badge">12</span>
                        </a>
                        <ul class="dropdown-menu medium">
                            <li class="menu-header">
                                <a class="dropdown-item" href="#">Notification</a>
                            </li>
                            <li class="menu-content ps-menu">
                                <!-- Notifications here -->
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown dropdown-menu-end">
                        <a href="#" class="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="label">
                                <span></span>
                                <div>Akun</div>
                            </div>
                            <img class="img-user" src="../assets/images/avatar1.png" alt="user" srcset="">
                        </a>
                        <ul class="dropdown-menu small">
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="description"><i class="ti-user"></i> Kelola Akun</div>
                                </a>
                                <a href="#">
                                    <div class="description"><i class="ti-power-off"></i> Logout</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <nav class="main-sidebar ps-menu">
            <div class="sidebar-header">
                <div class="text">SIMPA</div>
                <div class="close-sidebar action-toggle">
                    <i class="ti-close"></i>
                </div>
            </div>
            <div class="sidebar-content">
                <ul>
                    <li class="active"><a href="coba.blade.php" class="link"><i class="ti-home"></i> Dashboard
                            Guru</a></li>
                    <li><a href="siswa" class="link"><i class="ti-desktop"></i> Data Siswa</a></li>
                    <li><a href="#" class="link"><i class="ti-notepad"></i> Data Nilai</a></li>
                    <li><a href="#" class="link"><i class="ti-layers-alt"></i> Jadwal Kelas</a></li>
                    <li><a href="#" class="link"><i class="ti-book"></i> Materi</a></li>
                    <li><a href="charts.html" class="link"><i class="ti-write"></i> Konsultasi</a></li>
                </ul>
            </div>
        </nav>
        <div class="main-content">
            <div class="title">Dashboard</div>
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
                                                <th>NIK</th>
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
            <div class="settings">
                <div class="settings-icon-wrapper">
                    <div class="settings-icon">
                        <i class="ti ti-settings"></i>
                    </div>
                </div>
                <div class="settings-content">
                    <ul>
                        <li class="fix-header">
                            <div class="fix-header-wrapper">
                                <div class="form-check form-switch lg">
                                    <label class="form-check-label" for="settingsFixHeader">Fixed Header</label>
                                    <input class="form-check-input toggle-settings" name="Header" type="checkbox"
                                        id="settingsFixHeader">
                                </div>

                            </div>
                        </li>
                        <li class="fix-footer">
                            <div class="fix-footer-wrapper">
                                <div class="form-check form-switch lg">
                                    <label class="form-check-label" for="settingsFixFooter">Fixed Footer</label>
                                    <input class="form-check-input toggle-settings" name="Footer" type="checkbox"
                                        id="settingsFixFooter">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="theme-switch">
                                <label for="">Theme Color</label>
                                <div>
                                    <div class="form-check form-check-inline lg">
                                        <input class="form-check-input lg theme-color" type="radio"
                                            name="ThemeColor" id="light" value="light">
                                        <label class="form-check-label" for="light">Light</label>
                                    </div>
                                    <div class="form-check form-check-inline lg">
                                        <input class="form-check-input lg theme-color" type="radio"
                                            name="ThemeColor" id="dark" value="dark">
                                        <label class="form-check-label" for="dark">Dark</label>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fix-footer-wrapper">
                                <div class="form-check form-switch lg">
                                    <label class="form-check-label" for="settingsFixFooter">Collapse Sidebar</label>
                                    <input class="form-check-input toggle-settings" name="Sidebar" type="checkbox"
                                        id="settingsFixFooter">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <footer>
                <span>SIMPA 2025</span>
            </footer>
            <div class="overlay action-toggle">
            </div>
        </div>
        <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
        <script src="../vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>

        <!-- js for this page only -->
        <script src="../vendor/chart.js/dist/Chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="../assets/js/page/index.js"></script>
        <!-- ======= -->
        <script src="../assets/js/main.js"></script>
        <script>
            Main.init()
        </script>
</body>

</html>
