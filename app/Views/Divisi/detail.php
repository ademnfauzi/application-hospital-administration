<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mb-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> DATA DETAIL Divisi </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Divisi') ?>">Data Divisi</a></li>
              <li class="breadcrumb-item active">Data Detail Divisi</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- main content -->
        <!-- Profile Divisi -->
        <section>
          <div class="container">
          <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <h3 class="profile-username text-center"><b> <?= $detailDivisi['nama']; ?> </b></h3>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right"><?= $detailDivisi['status']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Dibuat Tanggal</b> <a class="float-right"><?= $detailDivisi['created_at']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Diupdate Tanggal</b> <a class="float-right"><?= $detailDivisi['updated_at']; ?></a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
          </div>
            <!-- /.card -->
          </div>
        </section>
        
</div>
  <?= $this->endSection(); ?>