
    <!-- Start Greeting Cards -->
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400"
            style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1 ml-4">
                    <img height="580" src="<?=base_url('assets/informasi_gambar')?>/<?=$detail->gambar?>" alt="">
                    <br><br>
                    <h1 class="display-4" style="color: black; font-family:'poppins';" data-aos="fade-down"
                        data-aos-duration="1400"><?=$detail->judul_informasi?>
                    </h1>
                        <p><?=$detail->isi_informasi?></p>
                        <hr align="left" width="600;">
                </div>
            </div>
        </div>
    </div>
    <!-- End Greeting Cards -->




    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <!-- End Animate On Scroll -->