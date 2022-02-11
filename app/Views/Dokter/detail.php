<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> DATA DETAIL DOKTER </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Dokter') ?>">Data Dokter</a></li>
              <li class="breadcrumb-item active">Data Detail Dokter</li>
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
                <div class="text-center">
                  <img style="width:200px; height:200px; margin-top:0px;" class="img-fluid img-circle" src="<?= base_url('Assets/img/profile')  .'/'. $detailDokter['image']; ?>" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center"><b> <?= $detailDokter['nama']; ?> </b></h3>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Kode Dokter</b> <a class="float-right"><?= $detailDokter['kode_dokter']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= $detailDokter['email']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone</b> <a class="float-right"><?= $detailDokter['phone']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Divisi</b> <a class="float-right"><?= $detailDokter['divisi']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right"> <span class="badge <?= ($detailDokter['status'] == 'Tidak Aktif') ? 'bg-danger' : 'bg-success'?>"><?= $detailDokter['status']; ?></span> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Created At</b> <a class="float-right"><?= $detailDokter['created_at']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Updated At</b> <a class="float-right"><?= $detailDokter['updated_at']; ?></a>
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