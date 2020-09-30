            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Tambah Soal</h2>
                            </div>
                        </div>
                        <div class="card card-success">
                            <div class="col-md-12 text-center">
                                <p class="registration-title font-weight-bold display-4 mt-4"
                                    style="color:black; font-size: 50px;">
                                    Tambah Soal</p>
                                <hr>
                            </div>
                            <div id="detail" class="card-body">
                                <form method="POST" enctype="multipart/form-data"
                                    action="<?=base_url('guru/tambah_soal')?>">
                                    <div class="col-md-12 bg-white"
                                        style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                        <form method="post" enctype="multipart/form-data"
                                            action="<?=base_url('guru/tambah_soal')?>">
                                            <input type="hidden" name="id">
                                            
                                            
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Soal</label>
                                                <textarea class="form-control" required name="soal"
                                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Jawaban A</label>
                                                <input type="text" class="form-control" name="a"
                                                    id="a" required
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Jawaban B</label>
                                                <input type="text" class="form-control" name="b"
                                                    id="b" required
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Jawaban C</label>
                                                <input type="text" class="form-control" name="c"
                                                    id="c" required
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Jawaban D</label>
                                                <input type="text" class="form-control" name="d"
                                                    id="d" required
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Jawaban E</label>
                                                <input type="text" class="form-control" name="e"
                                                    id="e" required
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState">Kunci Jawaban</label>
                                                <select required id="inputState" name="kunci_jawaban" class="form-control">
                                                    <option selected>Pilih disini</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">ID Evaluasi</label>
                                                <input type="text" class="form-control" name="id_evaluasi"
                                                    id="id_evaluasi" required
                                                    placeholder="">
                                            </div>
                                            <button type="submit" class="btn btn-block btn-success">Tambah Soal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                    </div>
                </section>
            </div>
        </div>
        <!-- End Main Content -->


    <!-- Start Sweetalert -->

    <?php if ($this->session->flashdata('success-edit')): ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data Materi Telah Dirubah!',
        text: 'Selamat data berubah!',
        showConfirmButton: false,
        timer: 2500
    })
    </script>
    <?php endif;?>

    <?php if ($this->session->flashdata('user-delete')): ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data Materi Telah Dihapus!',
        text: 'Selamat data telah Dihapus!',
        showConfirmButton: false,
        timer: 2500
    })
    </script>
    <?php endif;?>

    <?php if ($this->session->flashdata('success-reg')): ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data Materi Telah Ditambah!',
        text: 'Selamat data telah Ditambah!',
        showConfirmButton: false,
        timer: 2500
    })
    </script>
    <?php endif;?>

    <!-- End Sweetalert -->


    <!-- Start Footer -->
    <footer class="main-footer">
                <div class="footer-left">
                    E-Learning SMP PGRI Dago Pakar
                </div>
            </footer>
    <!-- End Footer -->


    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?=base_url('assets/')?>stisla-assets/js/stisla.js"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
        </script>

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