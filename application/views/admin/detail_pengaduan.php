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
                    <h3>Tanggapan :</h3>
                    <h4><?php echo $row['tanggapan']; ?></h4>
                    <hr>

                    <p class="card-text">
                        <?php if ($row['status'] == 'proses') { ?>
                    <h5>Pengaduan Masih dalam proses </h5>
                    </p>
                <?php } else if ($row['status'] == 'selesai') { ?>
                    <h5>Pengaduan Telah diselesaikan </h5>
                    </p>
                <?php } ?>
                <div class="row justify-content-center">
                    <a href="<?= base_url('pengaduan') ?>" class="btn btn-warning">Kembali</a>
                </div>
                </div>
            </div>
        </div>
        <?php } ?>s
</section>