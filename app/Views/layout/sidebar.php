<?php

use CodeIgniter\Session\Session;
?>
<!-- style="position: fixed;" -->
<aside  class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard') ?>" class="brand-link">
      <img src="<?= base_url('assets/img/logosi.png') ?>"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b> ARSIP HIMASI </b></span>
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
          
          <!-- anggota -->
          <li class="nav-item has-treeview <?= ($title === 'Data Anggota' ) ? 'menu-open' : ''; ?> <?= ($title === 'Tambah Anggota' ) ? 'menu-open' : ''; ?> <?= ($title === 'Edit Anggota' ) ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                Anggota
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Anggota') ?>" class="nav-link <?= ($title === 'Data Anggota') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Data Anggota</p>
                </a>
              </li>
              <?php if(Session()->get('level') !== 'User') : ?> 
              <li class="nav-item">
                <a href="<?= base_url('Anggota/tambah') ?>" class="nav-link <?= ($title === 'Tambah Anggota') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Anggota</p>
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </li>

          <!-- divisi -->
          <li class="nav-item has-treeview <?= ($title === 'Data Divisi' ) ? 'menu-open' : ''; ?> <?= ($title === 'Tambah Divisi' ) ? 'menu-open' : ''; ?> <?= ($title === 'Edit Divisi' ) ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-building"> </i>
              <p>
                  Divisi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Divisi') ?>" class="nav-link <?= ($title === 'Data Divisi') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Data Divisi</p>
                </a>
              </li>
              <?php if(Session()->get('level') !== 'User') : ?> 
              <li class="nav-item">
                <a href="<?= base_url('Divisi/tambah') ?>" class="nav-link <?= ($title === 'Tambah Divisi') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Divisi</p>
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </li>

          <!-- Proker -->
          <li class="nav-item has-treeview <?= ($title === 'Data Proker' ) ? 'menu-open' : ''; ?> <?= ($title === 'Tambah Proker' ) ? 'menu-open' : ''; ?> <?= ($title === 'Edit Proker' ) ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-briefcase"> </i>
              <p>
                  Program Kerja
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Proker') ?>" class="nav-link <?= ($title === 'Data Proker') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Data Program Kerja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Proker/tambah') ?>" class="nav-link <?= ($title === 'Tambah Proker') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Program Kerja</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- Dokumen -->
          <li class="nav-item has-treeview <?= ($title === 'Data Dokumen' ) ? 'menu-open' : ''; ?> <?= ($title === 'Tambah Dokumen' ) ? 'menu-open' : ''; ?> <?= ($title === 'Edit Dokumen' ) ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-upload"></i>
              <p>
                  Dokumen
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Dokumen') ?>" class="nav-link <?= ($title === 'Data Dokumen') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Data Dokumen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Dokumen/tambah') ?>" class="nav-link <?= ($title === 'Tambah Dokumen') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Dokumen</p>
                </a>
              </li>
            </ul>
          </li>

          <?php if(Session()->get('level') !== 'User') : ?> 
          <!-- Laporan -->
          <li class="nav-item has-treeview <?= ($title === 'Data Verifikasi' ) ? 'menu-open' : ''; ?> <?= ($title === 'Tambah Laporan' ) ? 'menu-open' : ''; ?> <?= ($title === 'Edit Laporan' ) ? 'menu-open' : ''; ?>">
            <a href="<?= base_url('Laporan'); ?>" class="nav-link">
            <i class="nav-icon fas fa-clipboard-check"></i>
              <p>
                  Verifikasi Dokumen
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <?php endif; ?>

          <!-- Arsip -->
          <li class="nav-item has-treeview <?= ($title === 'Data Arsip Anggota' ) ? 'menu-open' : ''; ?>  <?= ($title === 'Edit Data Arsip Anggota' ) ? 'menu-open' : ''; ?> <?= ($title === 'Data Arsip Dokumen' ) ? 'menu-open' : ''; ?> <?= ($title === 'Edit Data Arsip Dokumen' ) ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-archive"></i>
              <p>
                  Arsip
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Arsip_anggota') ?>" class="nav-link <?= ($title === 'Data Arsip Anggota') ? 'active' : ''; ?> <?= ($title === 'Edit Data Arsip Anggota') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Data Arsip Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Arsip_dokumen') ?>" class="nav-link <?= ($title === 'Data Arsip Dokumen') ? 'active' : ''; ?> <?= ($title === 'Edit Data Arsip Dokumen') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Arsip Dokumen</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Informasi -->
            <li class="nav-item has-treeview <?= ($title === 'Informasi Developer' ) ? 'menu-open' : ''; ?> <?= ($title === 'Struktur Kepengurusan' ) ? 'menu-open' : ''; ?>  <?= ($title === 'Informasi Aplikasi' ) ? 'menu-open' : ''; ?> ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                  Informasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Informasi/Struktur') ?>" class="nav-link <?= ($title === 'Struktur Kepengurusan') ? 'active' : ''; ?> <?= ($title === 'Edit Struktur Kepengurusan') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Struktur Kepengurusan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Informasi') ?>" class="nav-link <?= ($title === 'Informasi Developer') ? 'active' : ''; ?> ">
                  <i class="far fa-circle nav-icon "></i>
                  <p>Informasi Developer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Informasi/Aplikasi') ?>" class="nav-link <?= ($title === 'Informasi Aplikasi') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Informasi Aplikasi</p>
                </a>
              </li>
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