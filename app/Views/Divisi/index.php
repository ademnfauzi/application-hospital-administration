<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> DATA DIVISI </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Divisi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- main content -->
    <section class="content">
       <?php

use CodeIgniter\Session\Session;

if (session()->getFlashdata('pesan')) : ?>
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
                  <th>NAMA DIVISI</th>
                  <th>STATUS</th>
                  <?php if(Session()->get('level') !== 'User') : ?>
                    <th>AKSI</th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($divisi as $div) : ?>
                <tr>
                  <td><?= $div['nama_divisi']; ?></td>
                  <td><?= $div['status']; ?></td>
                  
                  <?php if(Session()->get('level') !== 'User') : ?>
                    <td>
                    <!-- Edit -->
                    <a href="<?= base_url('Divisi/edit') .'/' . $div['id_divisi']; ?>" class="btn btn-warning me-1" title="edit">
                      <i class="fas fa-user-edit"></i></a>

                      <!-- Delete -->
                      <a href="<?= base_url('Divisi/delete') .'/' . $div['id_divisi']; ?>" class="btn btn-danger" title="delete " onclick="return confirm('Apakah Anda yakin ?');">
                  <i class="fas fa-trash"></i></a>        
                  </td>
                <?php endif; ?>
                </tr>
                <?php endforeach; ?>
              </table>
            </div>
    </div>
    </section>




</div>
  <?= $this->endSection(); ?>