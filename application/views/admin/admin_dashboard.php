 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Dashboard</h1>
             </div><!-- /.col -->

         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <section class="content">
     <div class="container-fluid">
         <!-- Small boxes (Stat box) -->
         <div class="row">
             <div class="col-lg-3 col-6">
                 <!-- small box -->
                 <div class="small-box bg-info">
                     <div class="inner">
                         <center>
                             <h4>Jumlah Pengaduan</h4>

                             <h3><?php echo $jumlah_pengaduan; ?></h3>
                         </center>
                     </div>
                     <div class="icon">
                         <i class="ion ion-person-add"></i>
                     </div>
                     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>
             <!-- ./col -->
             <div class="col-lg-3 col-6">
                 <!-- small box -->
                 <div class="small-box bg-success">
                     <div class="inner">
                         <center>
                             <h4>Pengaduan Di Proses</h4>

                             <h3><?php echo $pengaduan_proses; ?></h3>
                         </center>
                     </div>
                     <div class="icon">
                         <i class="ion ion-checkmark"></i>
                     </div>
                     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>
             <!-- ./col -->
             <div class="col-lg-3 col-6">
                 <!-- small box -->
                 <div class="small-box bg-warning">
                     <div class="inner">
                         <center>
                             <h4>Pengaduan Di Tanggapi</h4>

                             <h3><?php echo $pengaduan_ditanggapi; ?></h3>
                         </center>
                     </div>
                     <div class="icon">
                         <i class="ion ion-chatbox"></i>
                     </div>
                     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>
             <!-- ./col -->
             <div class="col-lg-3 col-6">
                 <!-- small box -->
                 <div class="small-box bg-danger">
                     <div class="inner">
                         <center>
                             <h4>Pengaduan Selesai</h4>

                             <h3><?php echo $pengaduan_selesai; ?></h3>
                         </center>
                     </div>
                     <div class="icon">
                         <i class="ion ion-checkmark"></i>
                     </div>
                     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>
             <!-- ./col -->
         </div>

 </section>