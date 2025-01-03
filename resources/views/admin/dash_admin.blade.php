<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
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
                                        <img src="../assets/images/avatar1.png" class="rounded-circle w-100" alt="user1">
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
                                        <img src="../assets/images/avatar2.png" class="rounded-circle w-100" alt="user1">
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
                                        <img src="../assets/images/avatar1.png" class="rounded-circle w-100" alt="user1">
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
                                        <img src="../assets/images/avatar2.png" class="rounded-circle w-100" alt="user1">
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
                                        <img src="../assets/images/avatar2.png" class="rounded-circle w-100" alt="user1">
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
                                <div>Admin</div>
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
                        <a href="index.html" class="link">
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
                            <li><a href="element-ui.html" class="link"><span>Daftar Siswa</span></a></li>
                            <li><a href="element-accordion.html" class="link"><span>Nilai</span></a></li>
                            <li><a href="element-tabs-collapse.html" class="link"><span>Kesehatan</span></a></li>
                            <li><a href="element-card.html" class="link"><span>Konsultasi</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-book"></i>
                            <span>Guru</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="form-element.html" class="link">
                                    <span>Daftar Guru</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-notepad"></i>
                            <span>Teknis</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="error-404.html" target="_blank" class="link"><span>Jadwal</span></a></li>
                            <li><a href="error-403.html" target="_blank" class="link"><span>Mata Pelajaran</span></a></li>
                            <li><a href="error-500.html" target="_blank" class="link"><span>Ruangan</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-write"></i>
                            <span>Admin</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="table-basic.html" class="link"><span>Daftar Admin</span></a></li>
                            <li><a href="table-datatables.html" class="link"><span>Daftar Teknisi</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>        
<div class="main-content">
    <div class="title">
        Admin
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Siswa</h4>
                    </div>
                    <div class="card-body">
                        {{-- <canvas id="myChart" height="642" width="1388"></canvas> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Kesehatan</h4>
                    </div>
                    <div class="card-body">
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Nilai</h4>
                    </div>
                    <div class="card-body">
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Mata Pelajaran</h4>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Konsultasi</h4>
                    </div>
                    <div class="card-body">
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Jadwal</h4>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Guru</h4>
                    </div>
                    <div class="card-body">
                        <div class="container mt-5">
                            <h1 class="text-center mb-4">Daftar Guru</h1>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>NUPTK</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Gender</th>
                                            <th>Nomor Telepon</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gurus as $guru)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $guru->nuptk }}</td>
                                                <td>{{ $guru->nama }}</td>
                                                <td>{{ $guru->tanggal_lahir }}</td>
                                                <td>{{ $guru->gender }}</td>
                                                <td>{{ $guru->nomor_telepon }}</td>
                                                <td>{{ $guru->alamat }}</td>
                                                <td>
                                                    <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Ruangan</h4>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Teknisi</h4>
                    </div>
                    <div class="card-body">
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Admin</h4>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-4">
                <div class="card">
                    <!-- <div class="float-label">
                        <h6>Sales</h6>
                        <h4>$1500</h4>
                    </div> -->
                    <div class="card-body">
                        <div id="apex-chart"></div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <!-- <div class="float-label">
                        <h6>Profit</h6>
                        <h4>$500</h4>
                    </div> -->
                    <span></span>

                    <div class="card-body">
                        <div id="apex-chart-bar"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Activities</h4>
                    </div>
                    <div class="card-body">
                        <ul class="timeline-xs">
                            <li class="timeline-item success">
                                <div class="margin-left-15">
                                    <div class="text-muted text-small">
                                        2 minutes ago
                                    </div>
                                    <p>
                                        <a class="text-info" href="">
                                            Bambang
                                        </a>
                                        has completed his account.
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="margin-left-15">
                                    <div class="text-muted text-small">
                                        12:30
                                    </div>
                                    <p>
                                        Staff Meeting
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item danger">
                                <div class="margin-left-15">
                                    <div class="text-muted text-small">
                                        11:11
                                    </div>
                                    <p>
                                        Completed new layout.
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item info">
                                <div class="margin-left-15">
                                    <div class="text-muted text-small">
                                        Thu, 12 Jun
                                    </div>
                                    <p>
                                        Contacted
                                        <a class="text-info" href="">
                                            Microsoft
                                        </a>
                                        for license upgrades.
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="margin-left-15">
                                    <div class="text-muted text-small">
                                        Tue, 10 Jun
                                    </div>
                                    <p>
                                        Started development new site
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="margin-left-15">
                                    <div class="text-muted text-small">
                                        Sun, 11 Apr
                                    </div>
                                    <p>
                                        Lunch with
                                        <a class="text-info" href="">
                                            Mba Inem
                                        </a>
                                        .
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item warning">
                                <div class="margin-left-15">
                                    <div class="text-muted text-small">
                                        Wed, 25 Mar
                                    </div>
                                    <p>
                                        server Maintenance.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Chat</h4>
                    </div>
                    <div class="card-body small-padding">
                        <div class="panel-discussion ps-chat">
                            <ol class="discussion">
                                <li class="messages-date">
                                    Sunday, Feb 9, 12:58
                                </li>
                                <li class="self">
                                    <div class="message">
                                        <div class="message-name">
                                            Mas Bambang
                                        </div>
                                        <div class="message-text">
                                            Hi, Mba Inem
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="message-name">
                                            Mba Inem
                                        </div>
                                        <div class="message-text">
                                            How are you?
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar1.png" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="other">
                                    <div class="message">
                                        <div class="message-name">
                                            Mba Inem
                                        </div>
                                        <div class="message-text">
                                            Hi, i am good
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar2.png" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="self">
                                    <div class="message">
                                        <div class="message-name">
                                            Mas Bambang
                                        </div>
                                        <div class="message-text">
                                            Glad to see you ;)
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar1.png" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="messages-date">
                                    Sunday, Feb 9, 13:10
                                </li>
                                <li class="other">
                                    <div class="message">
                                        <div class="message-name">
                                            Mba Inem
                                        </div>
                                        <div class="message-text">
                                            What do you think about my new Dashboard?
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar2.png" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="messages-date">
                                    Sunday, Feb 9, 15:28
                                </li>
                                <li class="other">
                                    <div class="message">
                                        <div class="message-name">
                                            Mba Inem
                                        </div>
                                        <div class="message-text">
                                            Alo...
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="message-name">
                                            Mba Inem
                                        </div>
                                        <div class="message-text">
                                            Are you there?
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar2.png" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="self">
                                    <div class="message">
                                        <div class="message-name">
                                            Mas Bambang
                                        </div>
                                        <div class="message-text">
                                            Hi, i am here
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="message-name">
                                            Mba Inem
                                        </div>
                                        <div class="message-text">
                                            Your Dashboard is great
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar1.png" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="messages-date">
                                    Friday, Feb 7, 23:39
                                </li>
                                <li class="other">
                                    <div class="message">
                                        <div class="message-name">
                                            Mba Inem
                                        </div>
                                        <div class="message-text">
                                            How does the binding and digesting work in ReactJS?, Bang?
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar2.png" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="self">
                                    <div class="message">
                                        <div class="message-name">
                                            Mas Bambang
                                        </div>
                                        <div class="message-text">
                                            oh that's your question?
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="message-name">
                                            Mas Bambang
                                        </div>
                                        <div class="message-text">
                                            little reduntant, no?
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="message-name">
                                            Mas Bambang
                                        </div>
                                        <div class="message-text">
                                            literally we get the question daily
                                        </div>
                                        <div class="message-avatar">
                                            <img src="../assets/images/avatar1.png" alt="">
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="message-bar">
                            <div class="message-inner">
                                <a class="link icon-only" href="#"><i class="fa fa-camera"></i></a>
                                <div class="message-area">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <a class="link" href="#">
                                    Send
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

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
                                    <input class="form-check-input lg theme-color" type="radio" name="ThemeColor" id="light"
                                        value="light">
                                    <label class="form-check-label" for="light">Light</label>
                                </div>
                                <div class="form-check form-check-inline lg">
                                    <input class="form-check-input lg theme-color" type="radio" name="ThemeColor" id="dark"
                                        value="dark">
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