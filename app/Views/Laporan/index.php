<?php if(Session()->get('level') !== 'User') : ?>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> VERIFIKASI LAPORAN </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">VERIFIKASI LAPORAN</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- main content -->
    <section class="content">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="success:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <div>
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            </div>

        <?php elseif(session()->getFlashdata('pesan_warning')) : ?>
            <div class="alert alert-warning d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="success:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <div>
                <?= session()->getFlashdata('pesan_warning'); ?>
            </div>
            </div>
        <?php endif; ?>
        
       <!-- data -->
      <div class="container-fluid">
        <div class="row">

          <div class="col-sm-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $laporanMasuk; ?></h3>
                <p><b> Dokumen Masuk </b></p>
              </div>
              <div class="icon">
                <i class="fas fa-arrow-alt-circle-down"></i>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <!-- small box -->
            <div class="small-box bg-muted">
              <div class="inner">
                <h3><?= $laporanKeluar; ?></h3>
                <p><b> Dokumen Keluar </b></p>
              </div>
              <div class="icon">
                <i class="fas fa-arrow-alt-circle-up"></i>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="card" style="background-color:bisque;">
          <div class="card-body">
                <h4 class="text-center"><b>DOKUMEN MASUK</b></h4> 
                <br>
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NAMA DOKUMEN</th>
                  <th>PROKER</th>
                  <th>DIVISI</th>
                  <th>PERIODE</th>
                  <th>STATUS</th>
                  <th>KETERANGAN</th>
                  <th>FILE</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($dokumen as $d) : ?>
                <tr>
                  <td><?= $d['nama_dokumen']; ?></td>
                  <td><?= $d['nama_proker']; ?></td>
                  <td><?= $d['nama_divisi']; ?></td>
                  <td><?= $d['periode']; ?></td>
                  <td>
                      <?php if($d['status_dokumen'] !== 'Terverifikasi') : ?> 
                        <span class="badge badge-danger"><?= $d['status_dokumen']; ?></span>
                      <?php endif; ?>
                  </td>
                  <td><?= $d['keterangan']; ?></td>
                  <td>
                    <a href="<?= base_url('Assets/dokumen') .'/'. $d['file'] ?>" target="_blank">Download File</a>
                  </td>
                  <td>
                  
                  <!-- </button> -->
                  <a href="<?= base_url('Laporan/verifikasi') .'/' . $d['id_dokumen']; ?>" class="btn btn-warning">
                  <i class="fas fa-edit"></i>
                  
                  </a>
                  </td>
                </tr>
                <?php endforeach; ?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
      </div>

<hr>
      <div class="card">
          <div class="card-body">
                <h4 class="text-center"><b>DOKUMEN KELUAR</b></h4> 
                <br>
              <table id="table_dokumen" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NAMA DOKUMEN</th>
                  <th>PROKER</th>
                  <th>DIVISI</th>
                  <th>PERIODE</th>
                  <th>STATUS</th>
                  <th>KETERANGAN</th>
                  <th>FILE</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($dokumen2 as $d) : ?>
                <tr>
                  <td><?= $d['nama_dokumen']; ?></td>
                  <td><?= $d['nama_proker']; ?></td>
                  <td><?= $d['nama_divisi']; ?></td>
                  <td><?= $d['periode']; ?></td>
                  <td>
                    <?php if($d['status_dokumen'] === 'Terverifikasi') : ?> 
                        <span class="badge badge-success"><?= $d['status_dokumen']; ?></span>
                      <?php endif; ?>
                  </td>
                  <td><?= $d['keterangan']; ?></td>
                  <td>
                    <a href="<?= base_url('Assets/dokumen') .'/'. $d['file'] ?>" target="_blank">Download File</a>
                  </td>
                  <td>
                  
                  <!-- </button> -->
                  <a href="<?= base_url('Laporan/verifikasi') .'/' . $d['id_dokumen'] .'/'. $d['status_dokumen']; ?>" class="btn btn-warning" onclick="return confirm('Dokumen Akan Menjadi Tidak Terverifikasi ?');">
                  <i class="fas fa-edit"></i>
                  
                  </a>
                  </td>
                </tr>
                <?php endforeach; ?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
      </div>


    <section class="content">
    
      
  </div>
<?= $this->endSection(); ?>
<?php else : ?>
<?= $this->extend('layout/Not_found'); ?>
<?php endif; ?>