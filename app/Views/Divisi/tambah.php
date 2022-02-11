<?php if(Session()->get('level') !== 'User') : ?>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> TAMBAH Divisi </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Divisi') ?>">Data Divisi</a></li>
              <li class="breadcrumb-item active">Edit Divisi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- main content -->
    <section class="content">
      <?php
                    $inputs = session()->getFlashdata('inputs');
                    $errors = session()->getFlashdata('errors');
                    $success = session()->getFlashdata('success');
                    if(!empty($errors)){ ?>
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                      <div>
                         <h4> Whoops!!! </h4>
                        <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                        </ul>
                      </div>
                    </div>

                  <?php } ?>
    <form action="<?= base_url('Divisi/save') ?>" method="post" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
      <div class="container">
          <div class="card card-info">
              <div class="card-header">
                    <!-- <h3 class="card-title">Input Addon</h3> -->
              </div>
              <?= csrf_field(); ?>

              <div class="card-body">
                <label for="nama" style="font-size: 20px;" class="form-label">Nama Divisi</label>
                <input type="text" class="form-control" id="nama" aria-describedby="inputGroupPrepend" required name="nama" value="<?= old('nama'); ?>"> <!-- old untuk inputan -->
              </div>

              <div class="card-body">
                <label for="status" style="font-size: 20px;" class="form-label">Status</label>
                  <select class="form-select" id="status" required name="status">
                    <option selected disabled value="">-Pilih Status-</option>
                    <option value="Aktif" <?= (old('status') == 'Aktif') ? 'selected' : ''?>>Aktif</option>
                    <option value="Tidak Aktif" <?= (old('status') == 'Tidak Aktif') ? 'selected' : ''?>>Tidak Aktif</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-success btn-lg">SUBMIT</button>
          </div>
      </div>
      </form>
    </section>
    
  </div>
  <?= $this->endSection(); ?>
  <?php else : ?>
<?= $this->extend('layout/Not_found'); ?>
  <?php endif; ?>