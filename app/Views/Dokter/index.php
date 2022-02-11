<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> DATA DOKTER </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Dokter</li>
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
          <div class="card">
            <div class="card-body">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>KODE DOKTER</th>
                  <th>NAMA</th>
                  <th>DIVISI</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($dokter as $u) : ?>
                <tr>
                <td><?= $u['kode_dokter']; ?></td>
                <td><?= $u['nama']; ?></td>
                <td><?= $u['divisi']; ?></td>
                <td>
                  <!-- <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                  <a href="<?= base_url('Dokter/detail') .'/' . $u['id_dokter'] .'/' . $u['kode_dokter'];  ?>" class="btn btn-info">
                  <i class="fas fa-info-circle"></i></a>
                  
                  <!-- </button> -->
                  <a href="<?= base_url('Dokter/edit') .'/' . $u['id_dokter'] .'/' . $u['kode_dokter']; ?>" class="btn btn-warning">
                  <i class="fas fa-user-edit"></i>
                  
                  </a>
                  <a href="<?= base_url('Dokter/delete') .'/' . $u['id_dokter'] .'/' . $u['kode_dokter']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ?');">
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
    </section>
    
  </div>
  <?= $this->endSection(); ?>