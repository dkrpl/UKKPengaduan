<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Pengaduan</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pengaduan</h3>
                    <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fa fa-plus"></i> Tambah</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID Petugas</th>
                                <th scope="col">Nama Petugas</th>
                                <th scope="col">Username</th>
                                <th scope="col">telp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data->result_array() as $row) {
                            ?>



                                <tr>
                                    <th><?= $row['id_petugas']; ?></th>
                                    <td><?= $row['nama_petugas']; ?></td>
                                    <td><?= $row['username']; ?></td>
                                    <td><?= $row['telp']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('pengguna/edit_masyarakat/' . $row['id_petugas']); ?>" class="btn btn-primary">Edit</a>
                                        <a href="<?= base_url('pengguna/hapus_petugas/') ?><?= $row['id_petugas'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Mau Hapus?')"> Hapus </a>
                                    </td>

                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin: 7rem auto;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <span class="fas fa-fw fa-box"></span>&nbsp&nbspTambahkan masyarakat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <form action="<?php echo base_url() . 'pengaduan/simpan'; ?>" enctype="multipart/form-data" method="POST">
                        <input type="hidden" value="<?php echo $this->session->userdata('nik'); ?>" name="nik">
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">isi laporan</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="isi_laporan"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto">
                            </div>
                        </div>


                </div>

            </div>
            <!-- end content modal -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger"><span class="fa fa-save"></span>&nbspSimpan</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="fa fa-times"></span>&nbspKembali</button>
            </div>
            </form>

        </div>

    </div>
</div>