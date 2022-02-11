<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> INFORMASI APLIKASI </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Informasi Aplikasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- main content -->
        <section class="content">
      <div class="col-md">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title"></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="card-body table-responsive p-0">
                  <h2 class="text-center"><b> WEBSITE ARSIP HIMASI </b></h2>
                  <br>
                  <div class="card-body">
                    <h4 class="text-center"><span class="fw-bold">Website Arsip Himasi</span> adalah sistem untuk manajemen arsip elektronik secara lebih tersentralisasi, digital, sistematis, aman, dan terstruktur. Dengan menggunakan Web Arsip ini dapat mempermudah pengurus ataupun pengguna untuk menyimpan, berbagi, dan mengelola arsip secara efisien.</h4>
                    <br/>
                    <section class="bg-gray p-4 fs-5">
                      <ul style="list-style:none;">
                        <li>Beberapa coba kami rangkum permasalahan yang sering ditemukan adalah :</li>
                        <ul>
                          <li>Arsip fisik rentan untuk rusak, terutama jika terjadi adanya bencana alam, arsip fisik rentan robek, menguning, dan tingginya risiko kehilangan arsip yang mengakibatkan kehilangan arsip sebagai aset penting.</li>
                          <li>User sulit mendapatkan arsip yang dibutuhkan, baik arsip yang spesifik atau dokumen yang sudah dibuat dalam waktu yang lama.</li>
                        </ul>
                      </ul>
                    </section>
                  </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </section>
    
</div>
<?= $this->endSection(); ?>