<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Halaman Guru SMP PGRI Dago Pakar</title>
    <!-- General CSS Files -->
    <link rel="icon" href="<?=base_url('assets/')?>img/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/components.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>

</head>

<body>


    <!-- Start Sidebar -->
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class=" navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">Hello, <?php
$data['user'] = $this->db->get_where('data_guru', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama_guru'];
?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Guru</div>
                            <a href="<?=base_url('welcome/logout')?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand text-danger">
                        <div>
                            <a href="<?=base_url('guru')?>"
                                style="font-size: 35px;font-weight:900;font-family: 'Poppins', sans-serif;"
                                class="text-success text-center">
                                E - Learning</a>
                        </div>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?=base_url('guru')?>">LY</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header ">Beranda</li>
                        <li class="nav-item dropdown active">
                            <a href="<?=base_url('guru')?>" class="nav-link"><i
                                    class="fas fa-desktop"></i><span>Beranda</span></a>
                        </li>
                        <li class="menu-header">Kelola Materi</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i>
                                <span>Materi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('guru/data_materi')?>">Materi</a></li>
                                <li><a class="nav-link" href="<?=base_url('guru/tambah_materi')?>">Tambah Materi</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Kelola Evaluasi</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-tasks"></i>
                                <span>Evaluasi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('guru/evaluasi')?>">Evaluasi Materi</a>
                                </li>
                                <li><a class="nav-link" href="<?=base_url('guru/tambah_evaluasi')?>">Tambah Evaluasi Materi</a>
                                </li>
                                <li><a class="nav-link" href="<?=base_url('guru/hasil_evaluasi')?>">Hasil Evaluasi Materi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Informasi</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-info"></i>
                                <span>Informasi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('guru/rencana_pembelajaran')?>">Rencana Pembelajaran</a>
                                </li>
                                <li><a class="nav-link" href="<?=base_url('guru/pengumuman')?>">Pengumuman</a>
                                </li>
                            </ul>
                        </li>
                        
                </aside>
            </div>
            <!-- End Sidebar -->