<?php

use CodeIgniter\Session\Session;
?>
<!-- style="position: fixed;" -->
<aside  class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard') ?>" class="brand-link text-center">
      <i class="fas fa-hospital"></i>
      <br>
      <span class="brand-text font-weight-light"><b> ADMINISTRATION </b></span>
      <br>
      <span class="brand-text font-weight-light"><b> HOSPITAL </b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-header" style="text-transform:uppercase;"><b> <?= Session()->get('level'); ?> </b></li>

          <!-- dashboarad -->
          <li class="nav-item">
            <a href="<?= base_url('dashboard') ?>" class="nav-link <?= ($title === 'Dashboard') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <?php if(Session()->get('level') === 'Admin') : ?>
          <!-- users -->
          <li class="nav-item has-treeview <?= ($title === 'Data User' ) ? 'menu-open' : ''; ?> <?= ($title === 'Tambah User' ) ? 'menu-open' : ''; ?> <?= ($title === 'Edit User' ) ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('user') ?>" class="nav-link <?= ($title === 'Data User') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('user/tambah') ?>" class="nav-link <?= ($title === 'Tambah User') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah User</p>
                </a>
              </li>
            </ul>
          </li>
          <?php endif; ?>
          
          <!-- pasien -->
          <li class="nav-item has-treeview <?= ($title === 'Data Pasien' ) ? 'menu-open' : ''; ?> <?= ($title === 'Tambah Pasien' ) ? 'menu-open' : ''; ?> <?= ($title === 'Edit Pasien' ) ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                Pasien
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Pasien') ?>" class="nav-link <?= ($title === 'Data Pasien') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Data Pasien</p>
                </a>
              </li>
              <?php if(Session()->get('level') !== 'User') : ?> 
              <li class="nav-item">
                <a href="<?= base_url('Pasien/tambah') ?>" class="nav-link <?= ($title === 'Tambah Pasien') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Pasien</p>
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </li>

          <!-- dokter -->
          <li class="nav-item has-treeview <?= ($title === 'Data Dokter' ) ? 'menu-open' : ''; ?> <?= ($title === 'Tambah Dokter' ) ? 'menu-open' : ''; ?> <?= ($title === 'Edit Dokter' ) ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-md"></i>
              <p>
                Dokter
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Dokter') ?>" class="nav-link <?= ($title === 'Data Dokter') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Data Dokter</p>
                </a>
              </li>
              <?php if(Session()->get('level') !== 'User') : ?> 
              <li class="nav-item">
                <a href="<?= base_url('Dokter/tambah') ?>" class="nav-link <?= ($title === 'Tambah Dokter') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Dokter</p>
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </li>
     
          <li class="nav-item">
            <a href="<?= base_url('Auth/logout'); ?>" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>