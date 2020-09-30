
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Update Data Materi</h2>
                                <hr>
                                <p class="card-text"> Update data materi meliputi Nama Guru, Nama Mapel dan Deskripsi
                                    Materi.
                                    Hanya deskripsi materi yang dapat diubah.
                                </p>
                                <a href="#detail" class="btn btn-primary">Saya paham dan
                                    ingin melanjutkan</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-success">
                        <div class="col-md-12 text-center">
                            <p class="registration-title font-weight-bold display-4 mt-4"
                                style="color:black; font-size: 50px;">
                                Update Data Materi</p>
                            <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                dibawah </p>
                            <hr>
                        </div>
                        <?php foreach ($user as $u) {?>
                        <div class="card-body">
                            <form method="POST" action="<?=base_url('admin/materi_edit')?>">
                                <input type="hidden" name="id" value="<?=$u->id?>">
                                <div class="form-group">
                                    <label for="nip">Nama Guru</label>
                                    <input readonly id="nama_guru" type="text" class="form-control"
                                        value="<?=$u->nama_guru?>" name="nama_guru">
                                    <?=form_error('nama_guru', '<small class="text-danger">', '</small>');?>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_materi">Mata Pelajaran</label>
                                    <input readonly id="nama_materi" type="text" value="<?=$u->nama_materi?>"
                                        class="form-control" name="nama_materi">
                                    <?=form_error('email', '<small class="text-danger">', '</small>');?>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi Materi</label>
                                    <textarea class="form-control txtarea" name="deskripsi"
                                        id="exampleFormControlTextarea1" rows="3">
                                        <?=$u->deskripsi?></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">
                                        Update data
                                    </button>
                                </div>
                            </form>
                            <?php }?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->


    <!-- Start Footer -->
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2020 <div class="bullet"></div> Program & Design by <a
                href="syauqizaidan.github.io">Syaauqi</a> and Nauval Azhar - Stisla Developer
        </div>
        <div class="footer-right">
            Made with <span class="text-danger"> &#10084;</span> by syaauqi
        </div>
    </footer>
    <!-- End Footer -->


    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
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
</body>

</html>