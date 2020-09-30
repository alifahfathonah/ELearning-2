<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?=base_url('assets/')?>img/favicon.png" type="image/png">
    <!-- Title -->
    <title>Selamat datang - <?php
$data['user'] = $this->db->get_where('data_siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama_siswa'];
?> - Beranda Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/popup/magnific-popup.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/user_style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/materi_style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/responsive.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>
    <script src="<?=base_url('assets/')?>js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url('assets/')?>js/popper.js"></script>
    <script src="<?=base_url('assets/')?>js/bootstrap.min.js"></script>

</head>

<body style="overflow-x:hidden;background-color:#fbf9fa">


    <!-- Start Navigation Bar -->
    <header class="header_area" style="background-color: white !important;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?=base_url('welcome')?>"><img
                            src="<?=base_url('assets/')?>img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            
                            <li class="nav-item active"><a class="nav-link" href="<?=base_url('user')?>">Beranda</a>
                            </li>
                            <li class="nav-item submenu dropdown" id="navpelajaran">
                                <a href="#" class="nav-link dropdown-toggle"
                                    role="button" aria-haspopup="true" aria-expanded="false">Informasi</a>
                                <ul class="nav dropdown-menu ml-auto">
                                    <li class=" nav-item "><a class="nav-link text" href="<?=base_url('user/pengumuman')?>">Pengumuman</a></li>
                                    <li class=" nav-item "><a class="nav-link text" href="<?=base_url('user/rencana_pembelajaran')?>">Rencana&nbspPembelajaran</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown" id="navpelajaran">
                                <a href="#" class="nav-link dropdown-toggle"
                                    role="button" aria-haspopup="true" aria-expanded="false">Evaluasi</a>
                                <ul class="nav dropdown-menu ml-auto">
                                    <li class=" nav-item "><a class="nav-link text" href="<?=base_url('user/kuis')?>">Kuis</a></li>
                                    <li class=" nav-item "><a class="nav-link text" href="<?=base_url('user/ujian')?>">Ujian</a></li>
                                    <li class=" nav-item "><a class="nav-link text" href="<?=base_url('user/nilai')?>">Nilai&nbspEvaluasi</a></li>
                                    <!-- <li class="nav-item submenu dropdown" id="navpelajaran"><a href="#" class="nav-link dropdown-toggle"
                                    role="button" aria-haspopup="true" aria-expanded="false">Evaluasi Materi</a>
                                        <ul class="nav dropdown-menu ml-auto">
                                            <li class=" nav-item "><a class="nav-link text" href="<?=base_url('welcome/pengumuman')?>">Kuis</a></li>
                                            <li class=" nav-item "><a class="nav-link text" href="<?=base_url('welcome/pengumuman')?>">Kuis</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown" id="navpelajaran">
                                <a href="#" class="nav-link dropdown-toggle"
                                    role="button" aria-haspopup="true" aria-expanded="false"><?php
$data['user'] = $this->db->get_where('data_siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama_siswa'];
?></a>
                                <ul class="nav dropdown-menu ml-auto">
                                    <li class=" nav-item "><a class="nav-link text-danger" href="<?=base_url('welcome/logout')?>">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Navigation Bar -->