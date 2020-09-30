<!--================Courses Area =================-->
<section class="courses_area p_40">
    <div class="container">
        <div class="main_title">
            <h2>Pengumuman</h2>
        </div>
        <div class="row courses_inner">
            <div class="col-lg-9">
                <div class="grid_inner">
                <?php
                    foreach ($informasi as $i) {
                        ?>
                    <div class="grid_item wd44">
                        <div class="courses_item">
                            <img height="200px" src="<?=base_url('assets/informasi_gambar')?>/<?=$i->gambar?>" alt="">
                            <div class="hover_text">
                                <a class="cat" href="<?php echo site_url('user/detail_informasi/' . $i->id_informasi); ?>">Detail</a>
                                <a href="<?php echo site_url('user/detail_informasi/' . $i->id_informasi); ?>">
                                    <h4><?php echo $i->judul_informasi ?></h4>
                                </a>
                                <ul class="list">
                                    <li><a href="<?php echo site_url('user/detail_informasi/' . $i->id_informasi); ?>"><i class="lnr lnr-calendar-full"></i><?php echo $i->tanggal ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--================End Courses Area =================-->