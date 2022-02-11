<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
  <?php if(Session()->get('level') !== 'Divisi') : ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> EDIT Divisi </b></h1> 
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
    <form action="<?= base_url('Divisi/update') .'/'. $divisi['id_divisi']; ?>" method="post" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
    <input type="hidden" name="id_divisi" value="<?= $divisi['id_divisi']; ?>">
              <?= csrf_field(); ?>
      <div class="container">
          <div class="card card-warning">
              <div class="card-header">
                    <!-- <h3 class="card-title">Input Addon</h3> -->
              </div>

              <div class="card-body">
                <label for="divisi" style="font-size: 20px;" class="form-label">Nama Divisi</label>
                <input type="text" class="form-control" id="nama" aria-describedby="inputGroupPrepend" required name="nama" value="<?= $divisi['nama']; ?>">
              </div>

              <div class="card-body">
                <label for="status" style="font-size: 20px;" class="form-label">Status</label>
                  <select class="form-select" id="status" required name="status">
                    <option selected disabled value="">-Pilih Status-</option>
                    <option value="Aktif" <?= ($divisi['status'] == 'Aktif') ? 'selected' : ''?>>Aktif</option>
                    <option value="Tidak Aktif" <?= ($divisi['status'] == 'Tidak Aktif') ? 'selected' : ''?>>Tidak Aktif</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid status.
                  </div>
              </div>

              <button type="submit" class="btn btn-success btn-lg">SUBMIT</button>
          </div>
      </div>
      </form>
    </section>

<?php endif; ?>
</div>
  <?= $this->endSection(); ?>