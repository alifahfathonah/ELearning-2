            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h3 class="card-title" style="color: black;">Detail Hasil Evaluasi</h3>
                            </div>
                        </div>
                        
                        <div class="card card-success">
                            
                            <div class="col-md-12 text-center">
                                <p class="registration-title font-weight-bold display-4 mt-4"
                                    style="color:black; font-size: 30px;">
                                    Hasil Evaluasi</p>
                                <hr>
                            </div>
                            <div id="detail" class="card-body">
                                <table class="table">
                                    <tr>
                                        <td style="font-size:18px;" width="15%">NIS</td>
                                        <td style="font-size:18px;" width="3%">: </td>
                                        <td style="font-size:18px;"><?=$detail->nis?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size:18px;" width="15%">ID Evaluasi</td>
                                        <td style="font-size:18px;" width="5%">: </td>
                                        <td style="font-size:18px;"><?=$detail->id_evaluasi?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size:18px;" width="15%">Lampiran</td>
                                        <td style="font-size:18px;" width="5%">: </td>
                                        <td style="font-size:18px;">
                                            <a href="../assets/hasil_file/<?=$detail->lampiran?>" target="blank" download="w3logo">
                                            <?=$detail->lampiran?>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                <form method="POST" enctype="multipart/form-data"
                                    action="<?=base_url('guru/update_nilai')?>">
                                    <div class="col-md-12 bg-white"
                                        style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                        <form method="post" enctype="multipart/form-data"
                                            action="<?=base_url('guru/add_materi')?>">
                                            <input type="hidden" name="id_hasilevaluasi" value="<?=$detail->id_hasilevaluasi?>">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Skor</label>
                                                <input type="text" class="form-control" name="skor"
                                                    id="skor" required
                                                    placeholder="Masukkan Skor"
                                                    >
                                            </div>
                                            <button type="submit" class="btn btn-block btn-success">Tambah Skor
                                                </button>
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