

<?php $__env->startSection('title', 'Perpustakaan POLIWANGI'); ?>


<?php $__env->startSection('container'); ?>
<style type="text/css">
.carousel{
        
        
        background-size: cover;
        height: 89vh;
        background-position: center;
        margin-bottom: 0;
        
    }
.d-block{
    height: 89vh;
}
.text{
  width: 1100px;
  margin: auto;
  padding: 50px;
  font-size: 15px;
}
.card{
  text-align: center;
}
.carousel .carousel-caption{
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
 
  padding: 20px;
}

    </style>
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel" >

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="3000">
        <img src="img/beranda2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="margin-bottom:220px">
          <h1>Perpustakaan Politeknik Negeri Banyuwangi</h1>
        </div>
      </div>
      <div class="carousel-item" data-interval="3000">
        <img src="img/beranda.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 200px">
          <h5>Perpustakaan merupakan upaya untuk memelihara dan meningkatkan efisiensi dan efektifitas proses belajar-mengajar, juga sebagai salah satu sarana penunjang akademik yang memiliki peran cukup strategis dalam penyediaan informasi perkembangan ilmu pengetahuan bagi pengguna<br>di lingkungan civitas akademika Politeknik Negeri Banyuwangi.</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/beranda3.jpg" class="d-block w-100" alt="...">

      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  

  <div class="text">

    <div class="row">
      <div class="col-sm-6">
          <div class="card">
            <img src="img/jurnal.png" class="card-img-top alert-warning" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="text-align: center">E-Journal</h5>
            <div class="card-footer" style="margin-bottom: 10px">
              <small class="text-muted">Hanya dapat diakses menggunakan jaringan Politeknik Negeri Banyuwangi. Bagi yang menggunakan jaringan sendiri, Username dan Password silahkan dilihat di Perpustakaan.</small>
            </div>
            <a href="http://search.proquest.com/" target="_blank" class="btn btn-primary">Pergi Ke Halaman</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <img src="img/digi.png" class="card-img-top alert-warning " alt="...">
          <div class="card-body">
            <h5 class="card-title" style="text-align: center" >Digilib</h5>
            <div class="card-footer" style="margin-bottom: 50px">
              <small class="text-muted">Digital Library Politeknik Negeri Banyuwangi</small>
            </div>
            <a href="https://digilib.poliwangi.ac.id/" target="_blank" class="btn btn-primary">Pergi Ke Halaman</a>
          </div>
        </div>
      </div>
      </div>
    
    
    
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/index.blade.php ENDPATH**/ ?>