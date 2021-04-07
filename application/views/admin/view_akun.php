<div class="row justify-content-center">

    <div class="col-xl-5 col-lg-6 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <?php foreach ($data->result_array() as $row) { ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-6">Ubah Username Atau Password</h1>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                </div>
                                <form method="post" action="<?php echo base_url('akun/ubah') ?>" class="user">
                                    <input type="hidden" name="nik" value="<?php echo $row['nik']; ?>">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">username</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="username" value="<?php echo $row['username']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" value="<?php echo $row['pass']; ?>">
                                    </div>


                                    <!-- end content modal -->

                                    <center> <button type="submit" class="btn btn-primary" style="width: 90%;" onclick="return confirm('Apakah Anda Yakin Mau Ubah Password dan Username?')"><span class="fa fa-save"></span>&nbspSimpan</button></center><br>
                                </form>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>

</div>