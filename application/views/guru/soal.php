
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Hasil Evaluasi Materi</h2>
                                
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
                                            <th scope="col">Soal</th>
                                            <th scope="col">Jawaban A</th>
                                            <th scope="col">Jawaban B</th>
                                            <th scope="col">Jawaban C</th>
                                            <th scope="col">Jawaban D</th>
                                            <th scope="col">Jawaban E</th>
                                            <th scope="col">Kunci Jawaban</th>
                                            <th scope="col">Opsi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php

foreach ($user as $u) {
    ?>
                                        <tr class="text-center">

                                            <th scope="row">
                                                <?php echo $u->soal ?>
                                            </th>

                                            <td>
                                                <?php echo $u->a ?>
                                            </td>

                                            <td>
                                                <?php echo $u->b ?>
                                            </td>

                                            <td>
                                                <?php echo $u->c ?>
                                            </td>

                                            <td>
                                                <?php echo $u->d ?>
                                            </td>

                                            <td>
                                                <?php echo $u->e ?>
                                            </td>

                                            <td>
                                                <?php echo $u->kunci_jawaban ?>
                                            </td>
                                            
                                            <td class="text-center">
                                                <a href="<?php echo site_url('guru/detail_hasil/' . $u->id_soal); ?>"
                                                    class="btn btn-success">Detail</a>
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