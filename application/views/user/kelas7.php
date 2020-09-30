    <!-- Start Greeting Cards -->
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400"
            style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1">
                    <h1 class="display-4" style="color: black; font-family:'poppins';" data-aos="fade-down"
                        data-aos-duration="1400">Silahkan pilih Materi !
                    </h1>
                    <p></p>
                    <hr>

                    <h4 style="line-height: 4px;" data-aos="fade-down" data-aos-duration="1700"><?php
$data['user'] = $this->db->get_where('data_siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama_siswa'];
?> - Kelas <?php
$data['user'] = $this->db->get_where('data_siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['kelas'];
?> - <?php
$data['user'] = $this->db->get_where('data_siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['id_tahunajaran'];
?></h4>
                        <h5>Materi Kelas X</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- End Greeting Cards -->


    <!-- Start Lesson Card -->
    <div class="container">
        <div class="row mt-4 mb-5">
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-right">
                <a href="<?=base_url('materi/matematika_vii')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/matematika.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-down">
                <a href="<?=base_url('materi/ipa_vii')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/ipa.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-left">
                <a href="<?=base_url('materi/indo_vii')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/Bahasa Indonesia.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Lesson Card 2 -->
    <div class="container">
        <div class="row mt-4 mb-5">
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-right">
                <a href="<?=base_url('materi/inggris_vii')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/Bahasa Inggris.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-down">
                <a href="<?=base_url('materi/agama_vii')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/agama.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-left">
                <a href="<?=base_url('user')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/Kembali.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Lesson Card -->


    <br>


    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <!-- End Animate On Scroll -->