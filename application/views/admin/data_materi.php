


            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Management Data Materi</h2>
                                <hr>
                                <p class="card-text"> Jumlah Materi yang terdata di SMP PGRI Dago Pakar sekarang adalah <span
                                        class="font-weight-bold" style="color:black;">
                                        <?php echo $this->db->count_all('materi'); ?> Materi.</span> Materi dapat
                                    ditambah oleh guru maupun admin, materi meliputi video, deskripsi dan soal. </p>
                                <a href="<?=base_url('admin/tambah_materi')?>" class="btn btn-primary">Tambah
                                    Data Materi</a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="overflow: scroll">
                        <div class="col-md-12">
                            <div class="container bg-white p-4"
                                style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                <table id="example" class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama Guru</th>
                                            <th scope="col">Nama Mapel</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php

foreach ($user as $u) {
    ?>
                                        <tr class="text-center">

                                            <th scope="row">
                                                <?php echo $u->id ?>
                                            </th>

                                            <td>
                                                <?php echo $u->nama_guru ?>
                                            </td>

                                            <td>
                                                <?php echo $u->nama_materi ?>
                                            </td>
                                            <td>
                                                <?=substr($u->deskripsi, 0, 50);?>
                                                .&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.
                                            </td>

                                            <td>
                                                <?php echo $u->kelas ?>
                                            </td>

                                            <td class="text-center">
                                                <a href="<?php echo site_url('admin/update_materi/' . $u->id); ?>"
                                                    class="btn btn-info">Update</a>

                                                <a href="<?php echo site_url('admin/delete_materi/' . $u->id); ?>"
                                                    class="btn btn-danger remove">Delete</a>
                                            </td>

                                        </tr>
                                        <?php
}
?>
                                    </tbody>
                                </table>
                                <p class="small font-weight-bold">Sebelum mengupload file, harus terlebih dahulu
                                    melakukan config max_upload di php.ini</p>
                            </div>
                        </div>
                    </div>
            </div>
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
            Copyright &copy; 2020 <div class="bullet"></div> Code & Design by <a
                href="https://syauqizaidan.github.io/">Syaauqi</a>
        </div>
        <div class="footer-right">
            Made with <span class="text-danger"> &#10084;</span> by Syaauqi
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