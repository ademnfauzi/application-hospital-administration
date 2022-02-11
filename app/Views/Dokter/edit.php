<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> EDIT DATA DOKTER </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dokter') ?>">Data Dokter</a></li>
              <li class="breadcrumb-item active">Edit Dokter</li>
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
    <form action="<?= base_url('Dokter/update') .'/'. $dokter['id_dokter'] .'/'. $dokter['kode_dokter']; ?>" method="post" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
    <input type="hidden" name="id_dokter" value="<?= $dokter['id_dokter']; ?>">
    <input type="hidden" name="gambarLama" value="<?= $dokter['image']; ?>">
              <?= csrf_field(); ?>
      <div class="container">
          <div class="card card-warning">
              <div class="card-header">
                    <!-- <h3 class="card-title">Input Addon</h3> -->
              </div>
              <?= csrf_field(); ?>
              <div class="card-body">
                <label for="nama" style="font-size: 20px;" class="form-label">Nama*</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spannama"><i class="fas fa-user"></i></span>
                  <input type="text" class="form-control" id="nama" aria-describedby="inputGroupPrepend" required name="nama" value="<?= $dokter['nama']; ?>">
                  <div class="invalid-feedback">
                    Please fill in the coloumn name.
                  </div>
                </div>
              </div>
              
              <div class="card-body">
                <label for="email" style="font-size: 20px;" class="form-label">Email*</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spanemail"><i class="fas fa-envelope"></i></span>
                  <input type="text" class="form-control" id="email" aria-describedby="inputGroupPrepend" required name="email" value="<?= $dokter['email']; ?>">
                  <div class="invalid-feedback">
                    Please fill in the coloumn email.
                  </div>
                </div>
              </div>
              
              <div class="card-body">
                <label for="phone" style="font-size: 20px;" class="form-label">Phone</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spanphone"><i class="fas fa-phone-alt"></i></span>
                  <input type="number" class="form-control" id="phone" aria-describedby="inputGroupPrepend" name="phone" value="<?= $dokter['phone']; ?>">
                  <div class="invalid-feedback">
                    Please fill in the coloumn phone.
                  </div>
                </div>
              </div>

              <div class="card-body">
                <label for="divisi" style="font-size: 20px;" class="form-label">Divisi*</label>
                  <select class="form-select" id="divisi" required name="divisi">
                    <option selected disabled value="">-Pilih divisi-</option>
                    <option value="Poli Umum" <?= ($dokter['divisi'] == 'Poli Umum') ? 'selected' : ''?>>Poli Umum</option>
                    <option value="Poli Anak" <?= ($dokter['divisi'] == 'Poli Anak') ? 'selected' : ''?>>Poli Anak</option>
                    <option value="Poli Gigi" <?= ($dokter['divisi'] == 'Poli Gigi') ? 'selected' : ''?>>Poli Gigi</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid division.
                  </div>
              </div>
              
              <div class="card-body">
                <label for="status" style="font-size: 20px;" class="form-label">Status*</label>
                  <select class="form-select" id="status" required name="status">
                    <option selected disabled value="">-Pilih Status-</option>
                    <option value="Aktif" <?= ($dokter['status'] == 'Aktif') ? 'selected' : ''?>>Aktif</option>
                    <option value="Tidak Aktif" <?= ($dokter['status'] == 'Tidak Aktif') ? 'selected' : ''?>>Tidak Aktif</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid status.
                  </div>
              </div>

              <div class="card-body">
                <label for="image" style="font-size: 20px;" class="form-label">Gambar Profile</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-images"></i></span>
                  </div>
                  <br>
                  <input type="file" class="form-control custom-file-label" placeholder="" id="image" onchange="imgPreview()" name="image">
                </div>
                  <br>
                  <img src="<?= base_url('Assets/img/profile').'/'. $dokter['image']; ?>" alt="" class="preview" style="width: 200px; height:200px;">
                  <div class="invalid-feedback">
                    Please select a valid image.
                  </div>
              </div>
              
              <button type="submit" class="btn btn-success btn-lg">SUBMIT</button>
          </div>
      </div>
      </form>
    </section>

</div>
  <?= $this->endSection(); ?>