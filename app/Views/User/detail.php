<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> DATA DETAIL USER </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Data User</a></li>
              <li class="breadcrumb-item active">Data Detail User</li>
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
                <h3 class="profile-username text-center"><?= $detailUser['nama']; ?></h3>

                <p class="text-muted text-center">@<?= $detailUser['username']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <!-- <li class="list-group-item">
                    <b>Password</b> <a class="float-right"><?= $detailUser['password']; ?></a>
                  </li> -->
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= $detailUser['email']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Level</b> <a class="float-right"><?= $detailUser['level']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right"> <span class="badge <?= ($detailUser['status'] == 'Tidak Aktif') ? 'bg-danger' : 'bg-success'?>"><?= $detailUser['status']; ?></span> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Created At</b> <a class="float-right"><?= $detailUser['created_at']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Updated At</b> <a class="float-right"><?= $detailUser['updated_at']; ?></a>
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