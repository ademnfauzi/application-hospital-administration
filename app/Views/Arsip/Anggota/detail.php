<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> DATA DETAIL ARSIP ANGGOTA </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Arsip_anggota') ?>">Data Arsip Anggota</a></li>
              <li class="breadcrumb-item active">Data Detail Arsip Anggota</li>
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
                  <img style="width:200px; height:200px; margin-top:0px;" class="img-fluid img-circle"
                       src="<?= base_url('Assets/img/profile')  .'/'. $detailAnggota['image']; ?>"
                       alt="User profile picture">
                </div>
                <h3 class="profile-username text-center"><b> <?= $detailAnggota['nama']; ?> </b></h3>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>NPM</b> <a class="float-right"><?= $detailAnggota['npm']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= $detailAnggota['email']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone</b> <a class="float-right"><?= $detailAnggota['phone']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Jabatan</b> <a class="float-right"><?= $detailAnggota['jabatan']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Divisi</b> <a class="float-right"><?= $detailAnggota['nama_divisi']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Periode</b> <a class="float-right"><?= $detailAnggota['periode']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right"> <span class="badge <?= ($detailAnggota['status'] == 'Tidak Aktif') ? 'bg-danger' : 'bg-success'?>"><?= $detailAnggota['status']; ?></span> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Created At</b> <a class="float-right"><?= $detailAnggota['created_at']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Updated At</b> <a class="float-right"><?= $detailAnggota['updated_at']; ?></a>
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