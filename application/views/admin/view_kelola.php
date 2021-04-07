<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Kelola</h1>
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

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>id_tanggapan</th>
                                <th>id_pengaduan</th>
                                <th>tanggal</th>
                                <th>Nama</th>
                                <th>Isi Laporan</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data->result_array() as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['tgl_pengaduan'] ?></td>
                                    <td><?= $row['nik'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['isi_laporan'] ?></td>
                                    <td><img src="<?php echo base_url() . 'assets/foto/' . $row['foto']; ?>" width="80px" height="60px"></td>
                                    <td class="text-capitalize"><?= $row['status'] ?></td>
                                    <td>
                                        <?php if ($row['status'] == 'menunggu') { ?>
                                            <a href="<?= base_url('kelola/konfirm/') ?><?= $row['id_pengaduan'] ?>" class="btn btn-success btn-sm" onclick="return confirm('Apakah Anda Yakin Mau Konfirmasi?')"><i class="fas fa-edit"></i> Konfirmasi </a>
                                        <?php } else if ($row['status'] == 'proses') { ?>
                                            <a href="<?= base_url('kelola/balas/') ?><?= $row['id_pengaduan'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Balas </a>
                                        <?php } else if ($row['status'] == 'selesai') { ?>
                                            <a href="<?= base_url('kelola/delete/') ?><?= $row['id_pengaduan'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Mau Hapus?')"><i class="fas fa-trash"></i> Hapus </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>