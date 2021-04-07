<br>
<section class="content mt">
    <?php foreach ($isi->result_array() as $row) { ?>

        <div class="container-fluid ">
            <div class="card-header" style="background-color: white;">
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark">Detail Pengaduan</h3>
                </div><!-- /.col -->
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-capitalize float-right">Tanggal : <?php echo $row['tgl_pengaduan']; ?> </h3>
                    <img class="img-fluid" style="width: 30em; height:20em;" src="<?php echo base_url() . 'assets/foto/' . $row['foto']; ?>" alt="Card image cap">
                    <p class="card-text">
                    <h4>Isi Laporan : </h4>
                    <textarea class="form-control" style="height: 10em;" readonly><?php echo $row['isi_laporan']; ?></textarea>
                    </p>
                    <hr>
                    <p class="card-text">
                    <form action="<?php echo base_url() . 'kelola/tanggapan'; ?>" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="id_pengaduan" value="<?php echo $row['id_pengaduan']; ?>">
                        <input type="hidden" name="id_petugas" value="<?php echo $this->session->userdata('id_petugas'); ?>">
                        <h4>Tanggapan : </h4>
                        <textarea class="form-control" style="height: 10em;" name="tanggapan"></textarea>
                        </p>
                        <hr>

                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>&nbsp;
                            <a href="<?= base_url('kelola') ?>" class="btn btn-warning">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
</section>