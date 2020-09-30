            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Tambah Data Informasi</h2>
                            </div>
                        </div>
                        <div class="card card-success">
                            <div class="col-md-12 text-center">
                                <p class="registration-title font-weight-bold display-4 mt-4"
                                    style="color:black; font-size: 50px;">
                                    Tambah Data Informasi</p>
                                <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                    dibawah </p>
                                <hr>
                            </div>
                            <div id="detail" class="card-body">
                                <form method="POST" enctype="multipart/form-data"
                                    action="<?=base_url('admin/informasi_edit')?>">
                                    <div class="col-md-12 bg-white"
                                        style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                        <?php

                                            foreach ($user as $u) {
                                                ?>
                                        
                                            <div class="form-group">
                                                <label for="inputState">Kategori</label>
                                                <select required id="inputState" name="kategori_informasi" class="form-control">
                                                    <option value="<?=$u->kategori_informasi?>" selected><?=$u->kategori_informasi?></option>
                                                    <option value="Pengumuman">Pengumuman</option>
                                                    <option value="Rencana Pembelajaran">Rencana Pembelajaran</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">ID Informasi</label>
                                                <input type="text" value="<?=$u->id_informasi?>" readonly class="form-control" name="id_informasi"
                                                    id="id_informasi" required
                                                    placeholder="Masukkan ID Informasi"
                                                    >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Judul Informasi</label>
                                                <input type="text" class="form-control" name="judul_informasi"
                                                    id="judul_informasi" value="<?=$u->judul_informasi?>" required
                                                    placeholder="Masukkan Judul Informasi"
                                                    >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Isi Informasi</label>
                                                <textarea class="form-control" required name="isi_informasi"
                                                    id="exampleFormControlTextarea1" rows="3"><?=$u->isi_informasi?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input required type="file" name="gambar" required
                                                            class="custom-file-input" id="inputGroupFile01"
                                                            aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Upload
                                                            Gambar
                                                            Informasi</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Tanggal</label>
                                                <input type="date" class="form-control" name="tanggal"
                                                    id="tanggal" required value="<?=$u->tanggal?>"
                                                    >
                                            </div>
                                            <button type="submit" class="btn btn-block btn-success">Ubah
                                                Informasi</button>
                                    </div>
                                </form>
                                <?php
}
?>
                            </div>
                        </div>
                        <br>
                    </div>
                </section>
            </div>
        </div>
        <!-- End Main Content -->


        <!-- Start Footer -->
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2020 <div class="bullet"></div> Code & Design by <a
                    href="https://syauqizaidan.github.io/">Syaauqi</a>
            </div>
            <div class="footer-right">
                Made with <span class="text-danger"> &#10084;</span> by Syaauqi
            </div>
        </footer>
        <!-- End Footer -->


        <!-- General JS Scripts -->
        <script>
        function addDate(){
            date = new Date();
            var month = date.getMonth()+1;
            var day = date.getDate();
            var year = date.getFullYear();

            if (document.getElementById('tanggal').value == ''){
                document.getElementById('tanggal').value = day + '-' + month + '-' + year;
            }
        }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
        function autofill() {
            var nama_guru = $("#namaguru").val();
            $.ajax({
                url: '../autofill.php',
                data: "nama_guru=" + nama_guru,
            }).done(function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#nama_materi').val(obj.nama_materi);
            });
        }
        </script>
        <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="<?=base_url('assets/')?>stisla-assets/js/stisla.js"></script>
        <!-- JS Libraies -->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        </script>
        <!-- Template JS File -->
        <script src="<?=base_url('assets/')?>stisla-assets/js/scripts.js"></script>
        <script src="<?=base_url('assets/')?>stisla-assets/js/custom.js"></script>
        <!-- Page Specific JS File -->
</body>

</html>