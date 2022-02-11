<html>
  <head>
  </head>
  <body>
<?= $this->extend('layout/template'); ?>
<?= $this->extend('layout/struktur'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b> STRUKTUR KEPENGURUSAN </b></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Struktur Kepengurusan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body bg-dark" style="width:100%;height:120vh;">
  <figure class="org-chart cf">
    <ul class="administration all">
      <li class="list">					
        <ul class="director all">
          <li class="list">
            <a href="#" class="ja"><span>Ilham Rachmandito - Ketua Himasi</span></a>
            <ul class="subdirector all">
              <li class="list"><a href="#" class="ja"><span>Muhammad Farhan - Wakil Ketua Himasi</span></a></li>
            </ul>
            <ul class="subdirector all">
              <li class="list"><a href="#" class="ja tiga"><span>Klara Anggraini Z - Bendahara</span></a></li>
            </ul>
            <ul class="garis">
              <li class="list"><a href="#" class=""></a></li>
            </ul>

            <ul class="departments cf all">								
              <li class="list"><a href="#" class="ja"><span>Alisa Fitriyani - Sekretaris</span></a></li>
              
              <li class="department dep-a list">
                <a href="#" class="ja"><span>Shynta Octavia - Kadiv Danus</span></a>
                <ul class="sections all">
                  <li class="section list"><a href="#" class="ja"><span>Jessy Fania Putri</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Ranu Dwi Wahyudy</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Stefanus Boan P,S</span></a></li>
                </ul>
              </li>
              
              <li class="department dep-b list">
                <a href="#" class="ja"><span>Fatha AlSidqi - Kadiv Humas Eksternal</span></a>
                <ul class="sections all">
                  <li class="section list"><a href="#" class="ja"><span>Muhammad Farras</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Ananda Sustantiara</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Yuliana Setyowati</span></a></li>
                </ul>
              </li>

              <li class="department dep-c list">
                <a href="#" class="ja"><span>Muhammad Fikri - Kadiv Humas Internal</span></a>
                <ul class="sections all">
                  <li class="section list"><a href="#" class="ja"><span>Mohammad Jawad</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Ahmad Sobari</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Romantika Sirait</span></a></li>
                </ul>
              </li>
              
              <li class="department dep-d list">
                <a href="#" class="ja"><span>Ade Muhammad Nur Fauzi - Kadiv Litbang</span></a>
                <ul class="sections all">
                  <li class="section list"><a href="#" class="ja"><span>Retno Ekayanti</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Muhamad Rizki</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>David Ardian Darma</span></a></li>
                </ul>
              </li>

              <li class="department dep-e list">
                <a href="#" class="ja"><span>Andhika Bhayangkara - Kadiv Media Kreatif</span></a>
                <ul class="sections all">
                  <li class="section list"><a href="#" class="ja"><span>Ibnu Raihan</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Salsabillah</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Fathur Rahman Riffandy</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Puti Hamidah</span></a></li>
                </ul>
              </li>   
              
              <div class="tambahan">
              <li class="department dep-f list enam">
                <a href="#" class="jas"><span>Irham Rafi M - Kadiv Minat Bakat</span></a>
                <ul class="sections all">
                  <li class="section list"><a href="#" class="ja"><span>Bernardito Jordan</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Yuyun Yuniati</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Putri Amelia</span></a></li>
                  <li class="section list"><a href="#" class="ja"><span>Mauludani Muhammad</span></a></li>
                </ul>
              </li>
            </div>   

                         
            </ul>
          </li>
        </ul>	
      </li>
    </ul>		
  </figure>
            </div>
          </div>
      </section>

    
</div>
<?= $this->endSection(); ?>
</body>
</html>