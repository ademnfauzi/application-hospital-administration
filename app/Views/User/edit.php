  <?php

use CodeIgniter\Session\Session;

if(Session()->get('level') === 'Admin') : ?>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> EDIT USER </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Data User</a></li>
              <li class="breadcrumb-item active">Edit User</li>
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
    <form action="<?= base_url('User/update') .'/'. $user['id_user'] .'/'. $user['kode_user']; ?>" method="post" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
      <div class="container">
          <div class="card card-info">
              <div class="card-header">
                    <!-- <h3 class="card-title">Input Addon</h3> -->
              </div>
              <?= csrf_field(); ?>
              <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
              <input type="hidden" name="kode_user" value="<?= $user['kode_user']; ?>">
              <div class="card-body">
                <label for="nama" style="font-size: 20px;" class="form-label">Nama*</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spannama"><i class="fas fa-user"></i></span>
                  <input type="text" class="form-control" id="nama" aria-describedby="inputGroupPrepend" required name="nama" value="<?= $user['nama']; ?>">
                  <div class="invalid-feedback">
                    Please fill in the coloumn name.
                  </div>
                </div>
              </div>

              <div class="card-body">
                <label for="username" style="font-size: 20px;" class="form-label">Username*</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spanusername"><i class="fas fa-at"></i></span>
                  <input type="text" class="form-control" id="username" aria-describedby="inputGroupPrepend" required name="username" value="<?= $user['username']; ?>" readonly>
                  <div class="invalid-feedback">
                    Please fill in the coloumn username.
                  </div>
                </div>
              </div>
              
              <div class="card-body">
                <label for="email" style="font-size: 20px;" class="form-label">Email*</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spanemail"><i class="fas fa-envelope"></i></span>
                  <input type="text" class="form-control" id="email" aria-describedby="inputGroupPrepend" required name="email" value="<?= $user['email']; ?>">
                  <div class="invalid-feedback">
                    Please fill in the coloumn email.
                  </div>
                </div>
              </div>
              
              <!-- <div class="card-body">
                <label for="password" style="font-size: 20px;" class="form-label">Password*</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spanpassword"><i class="fas fa-lock"></i></span>
                  <input type="password" class="form-control" id="password" aria-describedby="inputGroupPrepend" name="password" value="<?= $user['password']; ?>" required>
                  <div class="invalid-feedback">
                    Please fill in the coloumn password.
                  </div>
                </div>
              </div> -->

              <div class="card-body">
                <label for="level" style="font-size: 20px;" class="form-label">Level*</label>
                  <select class="form-select" id="level" required name="level">
                    <option selected disabled value="">-Pilih Level-</option>
                    <option value="Admin" <?= ($user['level'] == 'Admin') ? 'selected' : ''?>>Admin</option>
                    <option value="BPH" <?= ($user['level'] == 'BPH') ? 'selected' : ''?>>BPH</option>
                    <option value="User" <?= ($user['level'] == 'User') ? 'selected' : ''?>>User</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid level.
                  </div>
              </div>

              <div class="card-body">
                <label for="status" style="font-size: 20px;" class="form-label">Status*</label>
                  <select class="form-select" id="status" required name="status">
                    <option selected disabled value="">-Pilih Status-</option>
                    <option value="Aktif" <?= ($user['status'] == 'Aktif') ? 'selected' : ''?>>Aktif</option>
                    <option value="Tidak Aktif" <?= ($user['status'] == 'Tidak Aktif') ? 'selected' : ''?>>Tidak Aktif</option>
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


    <!-- </div> -->
  </div>
  <?= $this->endSection(); ?>
  <?php else : ?>
<?= $this->extend('layout/Not_found'); ?>
  <?php endif; ?>