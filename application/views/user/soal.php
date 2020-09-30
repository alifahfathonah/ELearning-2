<!-- Start Greeting Cards -->
<div class="container">
    </div>
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400"
            style="width: 100%; border-radius:10px;">
            
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1">
                <form method="POST" enctype="multipart/form-data"
                                    action="<?=base_url('user/submit_evaluasi')?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ID Hasil Evaluasi</label>
                        <input type="text" class="form-control" name="id_hasilevaluasi"
                                                    id="id_hasilevaluasi"
                                                    >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIS</label>
                        <input type="text" class="form-control" name="nis"
                                                    id="nis" readonly value="<?php
$data['user'] = $this->db->get_where('data_siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nis'];
?>"
                                                    >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Jawaban</label>
                        <textarea class="form-control" required name="jawaban" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input required type="file" name="lampiran" required
                                                            class="custom-file-input" id="inputGroupFile01"
                                                            aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Lampirkan Jawaban</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ID Evaluasi</label>
                        <input type="text" class="form-control" name="id_evaluasi"
                                                    id="id_informasi" readonly value="<?php echo $detail->id_evaluasi ?>"
                                                    >
                    </div>
                    <button type="submit" class="btn btn-block btn-success">Submit</button>
                    <hr>
                </form>
                <h2>Kerjakan soal di bawah ini!</h2>
                <iframe width="100%" height="600" src="http://localhost/ujian/index.php">    </iframe>
                <!-- <form method="POST" enctype="multipart/form-data" action="<?=base_url('user/kerjakan')?>">
                    <?php
                    $no = 0;
                    foreach ($user as $u) {
                        $no++;
                    ?>
                    <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                    <input type="hidden" name="id_soal" value="<?php echo $u->id_soal; ?>">
                        <table class="table">
                            <tr>
                                <td rowspan="2" width="3%">
                                    <div class="form-group">
                                        <div class="text">
                                            <h4><?php echo $no; ?>.</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="text">
                                            <h4><?php echo $u->soal; ?></h4>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label for="exampleFormControlTextarea1">
                                                <input type="radio" name="jawaban[<?php echo $u->id_soal ?>]" id="optionsRadios1" value="A" required/><b style="color:black;">  A. &nbsp&nbsp</b> <?php echo $u->a ?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label for="exampleFormControlTextarea1">
                                                <input type="radio" name="jawaban[<?php echo $u->id_soal ?>]" id="optionsRadios1" value="B" required/><b style="color:black;">  B. &nbsp&nbsp</b> <?php echo $u->b ?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label for="exampleFormControlTextarea1">
                                                <input type="radio" name="jawaban[<?php echo $u->id_soal ?>]" id="optionsRadios1" value="C" required/><b style="color:black;">  C. &nbsp&nbsp</b> <?php echo $u->c ?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label for="exampleFormControlTextarea1">
                                                <input type="radio" name="jawaban[<?php echo $u->id_soal ?>]" id="optionsRadios1" value="D" required/><b style="color:black;">  D. &nbsp&nbsp</b> <?php echo $u->d ?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label for="exampleFormControlTextarea1">
                                                <input type="radio" name="jawaban[<?php echo $u->id_soal ?>]" id="optionsRadios1" value="E" required/><b style="color:black;">  E. &nbsp&nbsp</b> <?php echo $u->e ?>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    <?php 
                        } 
                    ?>
                    <button type="submit" class="btn btn-block btn-success">Selesai</button>
                </form> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Greeting Cards -->


    


    <br>


    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
        </script>
    <script>
    AOS.init();
    </script>
    <!-- End Animate On Scroll -->