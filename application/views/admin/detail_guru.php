
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="card" style="width:100%;">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Detail Guru | <?=$detail->nama_guru?> </h2>
                            <hr>
                        </div>
                    </div>
                    <div id="detail" class="col-md-12 bg-white p-3"
                        style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                        <h1 class="font-weight-bold card-title text-center" style="color: black;">Detail Guru </h1>
                        
                        <table style="width: 100%" class="container text-center">
                            <tbody>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">NUPTK :</span></td>
                                    <td> <?=$detail->nuptk?></td>
                                </tr>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Email :</span></td>
                                    <td> <?=$detail->email?></td>
                                </tr>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Nama Guru :</span></td>
                                    <td><?=$detail->nama_guru?></td>
                                </tr>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Nama Materi : </span></td>
                                    <td><?=$detail->nama_materi?></td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="font-weight:500px!important;font-size:18px;text-align:justify;" class="text-justify">
                        </p>
                        <a href="<?=base_url('admin/data_guru')?>" class="btn btn-success btn-block">Kembali</a>
                    </div>
                </section>
            </div>
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