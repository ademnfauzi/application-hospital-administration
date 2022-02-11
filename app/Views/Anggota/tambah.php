<?php if(Session()->get('level') !== 'User') : ?>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> TAMBAH ANGGOTA </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Anggota') ?>">Data Anggota</a></li>
              <li class="breadcrumb-item active">Edit Anggota</li>
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
    <form action="<?= base_url('Anggota/save') ?>" method="post" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
      <div class="container">
          <div class="card card-info">
              <div class="card-header">
                    <!-- <h3 class="card-title">Input Addon</h3> -->
              </div>
              <?= csrf_field(); ?>
              <div class="card-body">
                <label for="nama" style="font-size: 20px;" class="form-label">Nama*</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spannama"><i class="fas fa-user"></i></span>
                  <input type="text" class="form-control" id="nama" required aria-describedby="inputGroupPrepend" name="nama" value="<?= old('nama'); ?>">
                  <div class="invalid-feedback">
                    Please fill in the coloumn name.
                  </div>
                </div>
              </div>

              <div class="card-body">
                <label for="npm" style="font-size: 20px;" class="form-label">NPM*</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spannpm"><i class="fas fa-id-badge"></i></span>
                  <input type="number" class="form-control" id="npm" aria-describedby="inputGroupPrepend" required name="npm" value="<?= old('npm'); ?>">
                  <div class="invalid-feedback">
                    Please fill in the coloumn NPM.
                  </div>
                </div>
              </div>
              
              <div class="card-body">
                <label for="email" style="font-size: 20px;" class="form-label">Email*</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spanemail"><i class="fas fa-envelope"></i></span>
                  <input type="text" class="form-control" id="email" aria-describedby="inputGroupPrepend" name="email" value="<?= old('email'); ?>">
                  <div class="invalid-feedback">
                    Please fill in the coloumn email.
                  </div>
                </div>
              </div>
              
              <div class="card-body">
                <label for="phone" style="font-size: 20px;" class="form-label">Phone</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spanphone"><i class="fas fa-phone-alt"></i></span>
                  <input type="number" class="form-control" id="phone" aria-describedby="inputGroupPrepend" name="phone" value="<?= old('phone'); ?>">
                  <div class="invalid-feedback">
                    Please fill in the coloumn phone.
                  </div>
                </div>
              </div>

              <div class="card-body">
                <label for="jabatan" style="font-size: 20px;" class="form-label">Jabatan*</label>
                  <select class="form-select" id="jabatan" required name="jabatan">
                    <option selected disabled value="">-Pilih Jabatan-</option>
                    <option value="Ketua Himpunan" <?= (old('jabatan') == 'Ketua Himpunan') ? 'selected' : ''?>>Ketua Himpunan</option>
                    <option value="Wakil Ketua Himpunan" <?= (old('jabatan') == 'Ketua Himpunan') ? 'selected' : ''?>>Wakil Ketua Himpunan</option>
                    <option value="Sekretaris" <?= (old('jabatan') == 'Sekretaris') ? 'selected' : ''?>>Sekretaris</option>
                    <option value="Bendahara" <?= (old('jabatan') == 'Bendahara') ? 'selected' : ''?>>Bendahara</option>
                    <option value="Ketua Divisi" <?= (old('jabatan') == 'Ketua Divisi') ? 'selected' : ''?>>Ketua Divisi</option>
                    <option value="Pengurus Divisi" <?= (old('jabatan') == 'Pengurus Divisi') ? 'selected' : ''?>>Pengurus Divisi</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid position.
                  </div>
              </div>
              
              <div class="card-body">
                <label for="jabatan" style="font-size: 20px;" class="form-label">Divisi*</label>
                  <select class="form-select" id="jabatan" required name="divisi">
                    <option selected disabled value="">-Pilih Divisi-</option>
                    <?php foreach($divisi as $d) : ?>
                      <option value="<?= $d['id_divisi'] ?>" <?= (old('divisi') === $d['id_divisi'] ) ? 'selected' : ''?>> <?= $d['nama']; ?> </option>
                    <?php endforeach; ?>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid division.
                  </div>
              </div>

              <div class="card-body">
                <label for="periode" style="font-size: 20px;" class="form-label">Periode*</label>
                  <select class="form-select" id="periode" required name="periode">
                    <option selected disabled value="">-Pilih Periode-</option>
                    <option value="2020/2021" <?= (old('periode') == '2020/2021') ? 'selected' : ''?>>2020/2021</option>
                    <option value="2021/2022" <?= (old('periode') == '2021/2022') ? 'selected' : ''?>>2021/2022</option>
                    <option value="2022/2023" <?= (old('periode') == '2022/2023') ? 'selected' : ''?>>2022/2023</option>
                    <option value="2023/2024" <?= (old('periode') == '2023/2024') ? 'selected' : ''?>>2023/2024</option>
                    <option value="2024/2025" <?= (old('periode') == '2024/2025') ? 'selected' : ''?>>2024/2025</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid periode.
                  </div>
              </div>

              <div class="card-body">
                <label for="status" style="font-size: 20px;" class="form-label">Status*</label>
                  <select class="form-select" id="status" required name="status">
                    <option selected disabled value="">-Pilih Status-</option>
                    <option value="Aktif" <?= (old('status') == 'Aktif') ? 'selected' : ''?>>Aktif</option>
                    <option value="Tidak Aktif" <?= (old('status') == 'Tidak Aktif') ? 'selected' : ''?>>Tidak Aktif</option>
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
                  <img src="<?= base_url('Assets/img/profile/default.png') ?>" alt="" class="preview" style="width: 200px; height:200px;">
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