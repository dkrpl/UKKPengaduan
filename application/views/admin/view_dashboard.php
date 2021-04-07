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

             <!-- ./col -->
             <div class="col-lg-6 col-6">
                 <!-- small box -->
                 <div class="small-box bg-success">
                     <div class="inner">
                         <center>
                             <h4>Jumlah Pengaduan</h4>

                             <h3><?php echo $jumlah_pengaduan; ?></h3>
                         </center>
                     </div>
                     <div class="icon">
                         <i class="ion ion-checkmark"></i>
                     </div>
                     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>
             <!-- ./col -->
             <div class="col-lg-6 col-6">
                 <!-- small box -->
                 <div class="small-box bg-warning">
                     <div class="inner">
                         <center>
                             <h4>Pengaduan Belum Selesai</h4>

                             <h3><?php echo $jumlah_pengaduan_belum; ?></h3>
                         </center>
                     </div>
                     <div class="icon">
                         <i class="ion ion-chatbox"></i>
                     </div>
                     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>
             <!-- ./col -->

             <!-- ./col -->
         </div>

 </section>