            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Tambah Evaluasi</h2>
                            </div>
                        </div>
                        <div class="card card-success">
                            <div class="col-md-12 text-center">
                                <p class="registration-title font-weight-bold display-4 mt-4"
                                    style="color:black; font-size: 50px;">
                                    Tambah Evaluasi</p>
                                <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                    dibawah </p>
                                <hr>
                            </div>
                            <div id="detail" class="card-body">
                                <form method="POST" enctype="multipart/form-data"
                                    action="<?=base_url('guru/tambah_evaluasi')?>">
                                    <div class="col-md-12 bg-white"
                                        style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                        <form method="post" enctype="multipart/form-data"
                                            action="<?=base_url('guru/add_materi')?>">
                                            <input type="hidden" name="id">
                                            <div class="form-group">
                                                <label for="inputState">Jenis Evaluasi</label>
                                                <select required id="inputState" name="jenis_evaluasi" class="form-control">
                                                    <option selected>Pilih disini</option>
                                                    <option value="Kuis">Kuis</option>
                                                    <option value="Ujian">Ujian</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nama Materi</label>
                                                <input type="text" class="form-control" name="nama_materi"
                                                    id="nama_materi" required
                                                    placeholder="Pilih nama guru yang valid agar nama mapel muncul"
                                                    value="<?php
                                                                $data['user'] = $this->db->get_where('data_guru', ['email' =>
                                                                $this->session->userdata('email')])->row_array();
                                                                echo $data['user']['nama_materi'];
                                                            ?>"
                                                    readonly>
                                                <small>Jika nama mapel sudah berganti artinya nama guru yang kamu
                                                    masukan di input area adalah valid! jika tidak muncul nama mapel
                                                    anda harus klik input area nama guru dan pilih guru yang tersedia
                                                    disana.</small>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Nama Guru</label>
                                                    <input required type="text" list="nama_guru"
                                                         id="namaguru" name="nama_guru" value="<?php
                                                                                                $data['user'] = $this->db->get_where('data_guru', ['email' =>
                                                                                                $this->session->userdata('email')])->row_array();
                                                                                                echo $data['user']['nama_guru'];
                                                                                                ?>" class="form-control" readonly>
                                                    <small>List guru sudah tersedia di autocomplete, kalian hanya
                                                        tinggal klik input area nya atau dengan cara menulis namanya dan
                                                        klik guru yang akan dipilih.</small>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input required type="file" name="lampiran" required
                                                            class="custom-file-input" id="inputGroupFile01"
                                                            aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Lampirkan Materi Disini</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Tanggal</label>
                                                <input type="date" class="form-control" name="tanggal"
                                                    id="tanggal" required
                                                    >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">ID Evaluasi</label>
                                                <input type="text" class="form-control" name="id_evaluasi"
                                                    id="id_informasi" required
                                                    placeholder="Masukkan ID Informasi"
                                                    >
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState">Tambah Soal</label>
                                                <div class="card card-statistic-1">
                                                    <a href="<?=base_url('guru/tambah_soal')?>">
                                                    <div class="card-icon bg-success">
                                                        <i class="fas fa-plus"></i>
                                                    </div>
                                                    </a>
                                                </div>
                                </div>
                            </div>
                                            </div>
                                            <button type="submit" class="btn btn-block btn-success">Tambah
                                                Evaluasi</button>
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