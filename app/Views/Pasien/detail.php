<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> DATA DETAIL PASIEN </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('pasien') ?>">Data Pasien</a></li>
              <li class="breadcrumb-item active">Data Detail Pasien</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- main content -->
        <!-- Profile Image -->
        <section>
          <div class="container">
          <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Kode Pasien</b> <a class="float-right"><?= $detailPasien['kode_pasien']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Nama</b> <a class="float-right"><?= $detailPasien['nama']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>NIK</b> <a class="float-right"><?= $detailPasien['nik']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>No Handphone</b> <a class="float-right"><?= $detailPasien['phone']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right"> <span class="badge <?= ($detailPasien['status'] == 'Tidak Aktif') ? 'bg-danger' : 'bg-success'?>"><?= $detailPasien['status']; ?></span> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Created At</b> <a class="float-right"><?= $detailPasien['created_at']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Updated At</b> <a class="float-right"><?= $detailPasien['updated_at']; ?></a>
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