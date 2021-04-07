<!DOCTYPE html>
<html>

<head>
    <!-- Tittle Logo -->
    <link rel="icon" type="img/svg" href="assets/img/tittle/shop.png">
    <title>POS KITA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>plugins/summernote/summernote-bs4.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


<body background="<?php echo base_url() . 'assets/'; ?>img/wave.png">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">

                            <div class="text-center">
                                <h2 class="title text-success"><b><span class="fa fa-edit "></span>&nbspBUAT AKUN BARU</b></h2>
                                <hr class="mr-auto">
                            </div>

                            <form enctype="multipart/form-data" action="<?php echo base_url(); ?>login/simpanRegister" method="POST">

                                <div class="form-group mt-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Nik</label>
                                            <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan Nik Anda">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username Anda">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan Password Anda">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md">
                                        <label for="exampleInputPassword1">Telepon</label>
                                        <input type="number" class="form-control" id="telp" name="telp" placeholder="Masukkan Nomor Telepon Anda">
                                    </div>
                                </div>

                                <button class="btn btn-success btn-user btn-block" type="submit" id="simpan"><span class="fa fa-sign-in-alt"></span>&nbspDAFTAR SEKARANG</button>
                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="<?php echo base_url(); ?>login">Jika Sudah Punya Akun Silahkan Login di Sini</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- jQuery -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'assets/'; ?>dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url() . 'assets/'; ?>dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'assets/'; ?>dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>