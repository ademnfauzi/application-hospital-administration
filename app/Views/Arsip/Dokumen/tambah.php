<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> TAMBAH DOKUMEN </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dokumen') ?>">Data Dokumen</a></li>
              <li class="breadcrumb-item active">Edit Dokumen</li>
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
    <form action="<?= base_url('Dokumen/save') ?>" method="post" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
      <div class="container">
          <div class="card card-info">
              <div class="card-header">
                    <!-- <h3 class="card-title">Input Addon</h3> -->
              </div>
              <?= csrf_field(); ?>
              <div class="card-body">
                <label for="nama" style="font-size: 20px;" class="form-label">Nama Dokumen*</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spannama"><i class="fas fa-user"></i></span>
                  <input type="text" class="form-control" id="nama" aria-describedby="inputGroupPrepend" required name="nama" value="<?= old('nama'); ?>">
                  <div class="invalid-feedback">
                    Please fill in the coloumn name.
                  </div>
                </div>
              </div>
              
              
              <div class="card-body">
                <label for="proker" style="font-size: 20px;" class="form-label">Proker*</label>
                <select class="form-select" id="proker"  name="proker" required>
                  <option selected disabled value="">-Pilih Proker-</option>
                  <?php foreach($proker as $p) : ?>
                  <option value="<?= $p['id_proker'] ?>"><?= $p['nama_kegiatan']; ?></option>
                    <?php endforeach; ?>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid division.
                  </div>
              </div>

              <div class="card-body">
                <label for="jabatan" style="font-size: 20px;" class="form-label">Divisi*</label>
                  <select class="form-select" id="jabatan"  name="divisi" required>
                    <option selected disabled value="">-Pilih Divisi-</option>
                    <option value="1" <?= (old('divisi') == '1') ? 'selected' : ''?>>Badan Pengurus Harian</option>
                    <option value="2" <?= (old('divisi') == '2') ? 'selected' : ''?>>Penelitian Dan Pengembangan</option>
                    <option value="3" <?= (old('divisi') == '3') ? 'selected' : ''?>>Minat Dan Bakat</option>
                    <option value="4" <?= (old('divisi') == '4') ? 'selected' : ''?>>Media Kreatif</option>
                    <option value="5" <?= (old('divisi') == '5') ? 'selected' : ''?>>Humas Internal</option>
                    <option value="6" <?= (old('divisi') == '6') ? 'selected' : ''?>>Humas Eksternal</option>
                    <option value="7" <?= (old('divisi') == '7') ? 'selected' : ''?>>Dana Usaha</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid division.
                  </div>
              </div>

              <div class="card-body">
                <label for="periode" style="font-size: 20px;" class="form-label">Periode*</label>
                  <select class="form-select" id="periode"  name="periode" required>
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

              
              <?php if(Session()->get('level') === 'Admin') : ?>
              <div class="card-body">
                <label for="status" style="font-size: 20px;" class="form-label">Status*</label>
                  <select class="form-select" id="status"  name="status" required>
                    <option selected disabled value="">-Pilih Status-</option>
                    <option value="Terverifikasi" <?= (old('status') == 'Terverifikasi') ? 'selected' : ''?>>Terverifikasi</option>
                    <option value="Tidak Terverifikasi" <?= (old('status') == 'Tidak Terverifikasi') ? 'selected' : ''?>>Tidak Terverifikasi</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid status.
                  </div>
              </div>
              <?php elseif(Session()->get('level') === 'User') : ?>
              <div class="card-body">
                <label for="status" style="font-size: 20px;" class="form-label">Status*</label>
                  <select class="form-select" id="status"  name="status" required>
                    <option selected disabled value="">-Pilih Status-</option>
                    <option value="Tidak Terverifikasi" <?= (old('status') == 'Tidak Terverifikasi') ? 'selected' : ''?>>Tidak Terverifikasi</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid status.
                  </div>
              </div>
              <?php endif; ?>

              <div class="card-body">
                <label for="keterangan" style="font-size: 20px;" class="form-label">Keterangan</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="spanketerangan"><i class="fas fa-info"></i></span>
                  <textarea name="keterangan" id="keterangan" class="form-control" cols="130" rows="5" ><?= old('keterangan'); ?></textarea>
                  <div class="invalid-feedback">
                    Please fill in the coloumn keterangan.
                  </div>
                </div>
              </div>


              <div class="card-body">
                <label for="file" style="font-size: 20px;" class="form-label">File</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-images"></i></span>
                  </div>
                  <br>
                  <input type="file" class="form-control custom-file-label" placeholder="" id="file"  name="file" required>
                </div>
              </div>
              
              <button type="submit" class="btn btn-success btn-lg">SUBMIT</button>
          </div>
      </div>
      </form>
    </section>


</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields

</script>
  <?= $this->endSection(); ?>