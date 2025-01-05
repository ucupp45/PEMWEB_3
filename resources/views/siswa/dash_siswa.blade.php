<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../vendor/perfect-scrollbar/css/perfect-scrollbar.css">

    <!-- CSS for this page only -->
    <link rel="stylesheet" href="../vendor/chart.js/dist/Chart.min.css">
    <!-- End CSS  -->

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
                                <a href="#">
                                    <div class="message-image">
                                        <img src="../assets/images/avatar1.png" class="rounded-circle w-100"
                                            alt="user1">
                                    </div>
                                    <div class="message-content read">
                                        <div class="subject">
                                            John
                                        </div>
                                        <div class="body">
                                            Please call me at 9pm
                                        </div>
                                        <div class="time">Just now</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="../assets/images/avatar2.png" class="rounded-circle w-100"
                                            alt="user1">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Michele
                                        </div>
                                        <div class="body">
                                            Please come to my party
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="../assets/images/avatar1.png" class="rounded-circle w-100"
                                            alt="user1">
                                    </div>
                                    <div class="message-content read">
                                        <div class="subject">
                                            Brad
                                        </div>
                                        <div class="body">
                                            I have something to discuss, please call me soon
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="../assets/images/avatar2.png" class="rounded-circle w-100"
                                            alt="user1">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Anel
                                        </div>
                                        <div class="body">
                                            Sorry i'm late
                                        </div>
                                        <div class="time">8 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="../assets/images/avatar2.png" class="rounded-circle w-100"
                                            alt="user1">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Mary
                                        </div>
                                        <div class="body">
                                            Please answer my question last night
                                        </div>
                                        <div class="time">Last month</div>
                                    </div>
                                </a>
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
                                <a href="#">
                                    <div class="message-icon text-danger">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="message-content read">
                                        <div class="body">
                                            There's incoming event, don't miss it!!
                                        </div>
                                        <div class="time">Just now</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-icon text-info">
                                        <i class="fas fa-info"></i>
                                    </div>
                                    <div class="message-content read">
                                        <div class="body">
                                            Your licence will expired soon
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-icon text-success">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="message-content">
                                        <div class="body">
                                            Successfully register new user
                                        </div>
                                        <div class="time">8 hours ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown dropdown-menu-end">
                        <a href="#" class="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="label">
                                <span></span>
                                <div>Siswa</div>
                            </div>
                            <img class="img-user" src="../assets/images/avatar1.png" alt="user"srcset="">
                        </a>
                        <ul class="dropdown-menu small">
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="description">
                                        <i class="ti-user"></i> Akun
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="description">
                                        <i class="ti-power-off"></i> Logout
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        <nav class="main-sidebar ps-menu">
            <div class="sidebar-toggle action-toggle">
                <a href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="sidebar-opener action-toggle">
                <a href="#">
                    <i class="ti-angle-right"></i>
                </a>
            </div>
            <div class="sidebar-header">
                <div class="text">SIMPA</div>
                <div class="close-sidebar action-toggle">
                    <i class="ti-close"></i>
                </div>
            </div>
            <div class="sidebar-content">
                <ul>
                    <li class="active">
                        <a href="#" class="link">
                            <i class="ti-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-user"></i>
                            <span>Siswa</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="#daftarsiswa" class="link"><span>Data Siswa</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-book"></i>
                            <span>Jadwal</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="#daftarguru" class="link">
                                    <span>Jadwal Pelajaran</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-notepad"></i>
                            <span>Nilai</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="error-404.html" target="_blank" class="link"><span>Nilai Siswa</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main-content">
            <div class="title">
                Siswa
            </div>
            <div class="content-wrapper">

                {{-- DAFTAR SISWA --}}
                <div class="row same-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header " id="daftarsiswa">
                                <h4>Data Siswa</h4>
                                <!-- Tombol untuk membuka modal tambah siswa -->
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($siswas as $siswa)
                                                <tr>
                                                    <td>{{ $siswa->nik }}</td>
                                                    <td>{{ $siswa->nama }}</td>
                                                    <td>{{ $siswa->gender }}</td>
                                                    <td>{{ $siswa->nama_orang_tua }}</td>
                                                    <td>{{ $siswa->nomor_telepon }}</td>
                                                    <td>{{ $siswa->tanggal_lahir }}</td>
                                                    <td>{{ $siswa->alamat }}</td>
                                                    <td>
                                                        <!-- Edit Button -->
                                                        <button class="btn btn-info btn-sm"
                                                            onclick="editSiswa({{ $siswa->id }})">Edit</button> 
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $siswas->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!-- Modal for Edit Siswa -->
                <div class="modal fade" id="editSiswaModal" tabindex="-1" aria-labelledby="editSiswaModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editSiswaModalLabel">Edit Siswa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form id="editSiswaForm" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="edit_nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="edit_nik" name="nik"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit_nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="edit_nama" name="nama"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit_gender" class="form-label">Gender</label>
                                        <select class="form-control" id="edit_gender" name="gender" required>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit_nama_orang_tua" class="form-label">Nama Orang Tua</label>
                                        <input type="text" class="form-control" id="edit_nama_orang_tua"
                                            name="nama_orang_tua" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit_nomor_telepon" class="form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="edit_nomor_telepon"
                                            name="nomor_telepon" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit_tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="edit_tanggal_lahir"
                                            name="tanggal_lahir" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit_alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="edit_alamat" name="alamat"
                                            required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 


                <!-- Include jQuery and Bootstrap JS for Modal functionality -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

                <script>
                    // Handle Edit Modal
                    function editSiswa(id) {
                        $.ajax({
                            url: '/siswa/' + id + '/edit',
                            method: 'GET',
                            success: function(response) {
                                $('#editSiswaModal').modal('show');
                                $('#editSiswaForm').attr('action', '/dash_admin/siswa/' + id);
                                $('#edit_nik').val(response.nik);
                                $('#edit_nama').val(response.nama);
                                $('#edit_gender').val(response.gender);
                                $('#edit_nama_orang_tua').val(response.nama_orang_tua);
                                $('#edit_nomor_telepon').val(response.nomor_telepon);
                                $('#edit_tanggal_lahir').val(response.tanggal_lahir);
                                $('#edit_alamat').val(response.alamat);
                            }
                        });
                    }
                    // Fungsi untuk membuka modal edit guru dan mengisi data yang dipilih
                </script> 




                {{-- Jadwal --}}
                <div class="row same-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" id="daftarguru">
                                <h4>Jadwal Siswa</h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Pelajaran</th>
                                                <th>Ruangan</th>
                                                <th>Tanggal</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jadwals as $jadwal)
                                                <tr>
                                                    <td>{{ $jadwal->id_pelajaran }}</td>
                                                    <td>{{ $jadwal->id_ruangan }}</td>
                                                    <td>{{ $jadwal->tanggal }}</td>
                                                    <td>{{ $jadwal->jam_mulai }}</td>
                                                    <td>{{ $jadwal->jam_selesai }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $jadwals->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nilai Table -->
                <div class="row same-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" id="daftaradmin">
                                <h4>Nilai Siswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama Siswa</th>
                                                <th>Nama Mata Pelajaran</th>
                                                <th>Nilai</th>
                                                <th>Nilai Akhir</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            @foreach ($nilais as $nilai)
                                                <tr>
                                                    <td>{{ $nilai->iteration }}</td>
                                                    <td>{{ $nilai->nik }}</td>
                                                    <td>{{ $nilai->nama }}</td>
                                                    <td>{{ $nilai->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                                    <td>{{ $nilai->no_telepon ?? 'N/A' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <!-- Pagination -->
                                    {{ $nilais->links() }}
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
                SIMPA 2025
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
