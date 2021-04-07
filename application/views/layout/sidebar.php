<!-- Brand Logo -->
<a href="#" class="brand-link">
  <img src="<?php echo base_url() . 'assets/'; ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">Pengaduan Masyarakat</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <?php if ($this->session->userdata('level') == 'admin') { ?>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() . 'assets/'; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $this->session->userdata('nama_petugas'); ?></a>
      </div>
    </div>
  <?php } else if ($this->session->userdata('akses') == 'masyarakat') { ?>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() . 'assets/'; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $this->session->userdata('nama'); ?></a>
      </div>
    </div>


  <?php } else if ($this->session->userdata('level') == 'petugas') { ?>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() . 'assets/'; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $this->session->userdata('nama_petugas'); ?></a>
      </div>
    </div>
  <?php } ?>

  <?php if ($this->session->userdata('level') == 'admin') { ?>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>dashboard/dashboard_admin" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>kelola" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Kelola</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>report" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>Laporan</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Pengguna
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>pengguna/petugas" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>petugas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>pengguna/masyarakat" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Masyarakat</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('login/logout'); ?>" onclick="return confirm('Apakah anda yakin mau keluar?')" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
  <?php } else if ($this->session->userdata('akses') == 'masyarakat') { ?>
    <!-- Masyarakat -->
    <!-- /.sidebar-menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>pengaduan" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Pengaduan</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Akun
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>akun" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Setting Akun</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('login/logout'); ?>" onclick="return confirm('Apakah anda yakin mau keluar?')" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
              </a>
            </li>

          </ul>
        </li>


      </ul>
    </nav>
  <?php } else if ($this->session->userdata('level') == 'petugas') { ?>
    <!-- Petugas -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>dashboard/dashboard_admin" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>kelola" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Kelola</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('login/logout'); ?>" onclick="return confirm('Apakah anda yakin mau keluar?')" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
  <?php } ?>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->