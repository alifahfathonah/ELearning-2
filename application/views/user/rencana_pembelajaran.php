    <!-- Start Greeting Cards -->
    <div class="container">
    <div class="form-group">
                                        <small class="text-danger"></small>
                                </div>
    </div>
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400"
            style="width: 100%; border-radius:10px;">
            <div class="row">
                        <div class="col-md-12">
                            <div class="container bg-white p-4"
                                style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                <div class="table-responsive">
                                    <table id="example" class="table align-items-center table-flush">
                                        

                                        <tbody>
                                            <?php
                                            foreach ($informasi as $i) {
                                                ?>
                                            <tr class="text-left">

                                                <th scope="row">
                                                    <h4><a href="<?php echo site_url('user/detail_informasi/' . $i->id_informasi); ?>"><?php echo $i->judul_informasi ?></a></h4>
                                                </th>

                                                <td class="text-right">
                                                    <h4><?php echo $i->tanggal ?></h4>
                                                </td>

                                                <!-- <td class="text-center">
                                                    <a href="<?php echo site_url('admin/detail_siswa/' . $u->nis); ?>"
                                                        class="btn btn-success">Detail</a>
                                                </td> -->

                                            </tr>
                                            <?php
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                    <p class="small font-weight-bold"></p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <!-- End Greeting Cards -->


    


    <br>


    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <!-- End Animate On Scroll -->