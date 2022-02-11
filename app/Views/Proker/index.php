<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> DATA PROGRAM KERJA </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Proker</li>
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
      <?php endif; ?>
       <!-- data -->
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-sm-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $litbangCount; ?></h3>
                <p>Penelitian Dan Pengembangan</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $danusCount; ?></h3>
                <p>Dana Usaha</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $mbCount; ?></h3>
                <p>Minat Dan Bakat</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          
          <div class="col-sm-4">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3><?= $hiCount; ?></h3>
                <p>Humas Internal</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <!-- small box -->
            <div class="small-box bg-muted">
              <div class="inner">
                <h3><?= $mkCount; ?></h3>
                <p>Media Kreatif</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?= $heCount; ?></h3>
                <p>Humas Eksternal</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>

        </div>
      </div>

    <div class="card">
    
            <div class="card-body">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NAMA KEGIATAN</th>
                  <th>DIVISI</th>
                  <th>PERIODE</th>
                  <th>STATUS</th>
                  <th>KETERANGAN</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($proker as $p) : ?>
                <tr>
                  <td><?= $p['nama_kegiatan']; ?></td>
                  <td><?= $p['nama_divisi']; ?></td>
                  <td><?= $p['periode']; ?></td>
                  <td><span class="badge <?= ($p['status'] === 'Aktif') ? 'badge-success' :'badge-danger' ?>"><?= $p['status']; ?></span></td>
                  <td><?= $p['keterangan']; ?></td>
                  <td>
                  
                  <!-- </button> -->
                  <a href="<?= base_url('Proker/edit') .'/' . $p['id_proker']; ?>" class="btn btn-warning">
                  <i class="fas fa-user-edit"></i>
                  
                  </a>
                  <a href="<?= base_url('Proker/delete') .'/' . $p['id_proker']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ?');">
                  <i class="fas fa-trash"></i>
                  
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