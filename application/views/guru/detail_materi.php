<!-- Main Content -->
<div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1 style="font-size: 27px; letter-spacing:-0.5px; color:black;">Detail Materi</h1>
                    </div>
                    <div class="">
                        <video src="<?=base_url('assets/materi_video')?>/<?=$detail->video?>" height="720" width="1280" alt="">
                    </div>
                    <br>
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;"><?=$detail->nama_materi?></h2>
                                <hr>
                                <p> <?=$detail->deskripsi?></p>
                            </div>
                        </div>
                    </div>
                    
                </section>
            </div>
            <!-- End Main Content -->