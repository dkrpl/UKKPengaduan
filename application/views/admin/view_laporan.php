<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Laporan</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <div class="card-body">
            <!-- row form tanggal -->
            <div class="row">
                <div class="col">
                    <form class="mb-4" method="GET" action="">
                        <input type="date" class="form-control" name="tgl_awal">
                </div>
                <div class="col">
                    <input type="date" class="form-control" name="tgl_akhir">
                </div>
                <div class="col">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i>Cari</button>

                </div>
            </div>
            </form>
            <?php
            $tgl_awal = $this->input->get('tgl_awal');
            $tgl_akhir = $this->input->get('tgl_akhir');
            ?>
            <!-- end row tanggal -->
            <?php if (!$tgl_awal && !$tgl_akhir) : ?>
                <a href="<?php echo site_url('report/pdf'); ?>" class="btn btn-danger " target="_blank">Cetak PDF</a>
                <a href="<?php echo site_url('report/excel'); ?>" class="btn btn-success " target="_blank">Cetak EXEl</a>
        </div>
        <h4 class="text-center mt-2">Laporan Masuk Tanggal <?= date('d F Y'); ?></h4>
    <?php else : ?>
        <a href="<?php echo site_url('report/pdf?tgl_awal=' . $tgl_awal . '&tgl_akhir=' . $tgl_akhir); ?>" class="btn btn-danger " target="_blank">Cetak PDF</a>
        <a href="<?php echo site_url('report/excel?tgl_awal=' . $tgl_awal . '&tgl_akhir=' . $tgl_akhir); ?>" class="btn btn-success " target="_blank">Cetak EXEl</a>
        <h4 class="text-center mt-2">Laporan Masuk Tanggal <?= $tgl_awal . ' S/D ' . $tgl_akhir ?></h4>
    <?php endif; ?>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID Pengaduan</th>
                        <th scope="col">Tanggal Pengaduan</th>
                        <th scope="col">Nik</th>
                        <th scope="col">Isi Laporan</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Status</th>
                    </tr>
                <tbody>
                    <?php
                    foreach ($data->result_array() as $row) {
                    ?>
                        <tr>
                            <th><?= $row['id_pengaduan']; ?></th>
                            <td><?= $row['tgl_pengaduan']; ?></td>
                            <td><?= $row['nik']; ?></td>
                            <td><?= $row['isi_laporan']; ?></td>
                            <td><img src="<?php echo base_url() . 'assets/foto/' . $row['foto']; ?>" width="80px" height="60px"></td>
                            <td><?= $row['status']; ?></td>

                        <?php } ?>

                </tbody>

            </table>
        </div>
    </div>
    </div>

    </div>
</section>