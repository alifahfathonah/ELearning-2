<!--
@Project: Learnify
@Author/Programmer: Syauqi Zaidan Khairan Khalaf
@URL: syauqi.js.org
Author E-mail: Zaidanline67@Gmail.com

@About-Learnify :
Web Edukasi Open Source yang
dibuat oleh Syauqi Zaidan Khairan Khalaf.
Learnify adalah Web edukasi yang dilengkapi video, materi, dan soal ( Coming soon )
yang didesign semenarik dan sesimple mungkin. Learnify dibuat ditujukan agar para siswa
dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja.
-->


<!--================ Start footer Area  =================-->
<footer class="footer-area p_60">
    <div class="container">
        <div class="row">
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Masuk - Sign in</h6>
                    <ul class="list">
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Untuk Siswa</a></li>
                        <li><a href="<?=base_url('welcome/guru')?>">Untuk Guru</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Link Terkait</h6>
                    <ul class="list">
                        <li><a href="javaScript:void(0);">Facebook</a></li>
                        <li><a href="javaScript:void(0);">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Kontak</h6>
                    <ul class="list">
                        <li><a href="tel:+62222513257">(022) 2513257</a></li>
                        <li><a href="mailto:email@gmail.com">email@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Alamat</h6>
                    <p>Jl. Bukit Pakar Timur I No.146, Ciburial, Kec. Cimenyan, Bandung, Jawa Barat 40198</p>
                </div>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-md-8 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                SMP PGRI Dago Pakar
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<!-- Start Login Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-dark font-weight-bold" style="color:#212529 !important;"
                    id="exampleModalCenterTitle">
                    Masuk Sebagai</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                        <form action="<?=base_url('welcome/login_guru')?>" method="post">
                                <button class="btn btn-block font-weight-bold"
                                    style="background-color: #4dbf1c;color:white;font-size:18px;">Guru</button>
                            </form>
                        </div>
                        <div class=" col-md-6">
                            <form action="<?=base_url('welcome/login_siswa')?>" method="post">
                                <button class="btn btn-block font-weight-bold"
                                    style="background-color: #4dbf1c;color:white;font-size:18px;">Siswa</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Modal -->


<!-- Sweetaler Flashdata -->
<?php if ($this->session->flashdata('success-reg')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Kamu berhasil daftar!',
    text: 'Sekarang kamu boleh login!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif;?>


<?php if ($this->session->flashdata('login-success')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Kamu berhasil daftar!',
    text: 'Sekarang login yuk!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif;?>


<?php if ($this->session->flashdata('success-verify')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Email Telah Diverifikasi!',
    text: 'Sekarang login yuk!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif;?>


<?php if ($this->session->flashdata('success-logout')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Kamu berhasil logout!',
    text: 'Selamat tinggal, Sampai jumpa lagi!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif;?>


<?php if ($this->session->flashdata('fail-login')): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Gagal login!',
    text: 'Silahkan Periksa Kembali Email dan Password Kamu!',
    showConfirmButton: false,
    timer: 2500
});
</script>
<?php endif;?>


<?php if ($this->session->flashdata('fail-email')): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Email Belum Diverifikasi!',
    text: 'Silahkan Cek Email Kamu Dahulu!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif;?>


<?php if ($this->session->flashdata('fail-pass')): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Password Salah!',
    text: 'Silahkan Periksa Kembali Password Kamu!',
    showConfirmButton: false,
    timer: 2500
});
</script>
<?php endif;?>


<?php if ($this->session->flashdata('not-login')): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Harap Login Terlebih Dahulu !',
    text: 'Silahkan Login Dahulu !',
    showConfirmButton: false,
    timer: 2500
});
</script>
<?php endif;?>


    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <!-- End Animate On Scroll -->
<script src="<?=base_url('assets/')?>js/stellar.js"></script>
<script src="<?=base_url('assets/')?>vendors/lightbox/simpleLightbox.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/isotope/isotope.pkgd.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url('assets/')?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/counter-up/jquery.counterup.js"></script>
<script src="<?=base_url('assets/')?>js/mail-script.js"></script>
<script src="<?=base_url('assets/')?>js/theme.js"></script>

</body>

</html>
