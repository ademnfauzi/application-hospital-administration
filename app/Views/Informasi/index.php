<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> INFORMASI DEVELOPER </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Informasi Developer</li>
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
              <h3 class="card-title">Versi 1.1</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="card-body table-responsive p-0">
                  <h5 class="text-center"><b> Penelitian Dan Pengembangan Periode 2021/2022 </b></h5>
                  <br>
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                      <th>NO</th>
                      <th>NAMA</th>
                      <th>NPM</th>
                      <th>POSISI</th>
                      <th>DEVELOPER</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Ade Muhammad Nur Fauzi</td>
                      <td>183112700650075</td>
                      <td><span class="tag tag-success">Ketua Divisi Litbang</span></td>
                      <td>Fullstack Developer</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>David Ardian Pratama</td>
                      <td>183112700650113</td>
                      <td><span class="tag tag-warning">Anggota Litbang</span></td>
                      <td>Back End Developer</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Retno Ekayanti</td>
                      <td></td>
                      <td><span class="tag tag-primary">Anggota Litbang</span></td>
                      <td>Testing & Front End Developer</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Muhamad Rizki</td>
                      <td>197006516116</td>
                      <td><span class="tag tag-danger">Anggota Litbang</span></td>
                      <td>Testing & Front End Developer</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </section>
    
  </div>
  <?= $this->endSection(); ?>