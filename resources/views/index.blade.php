@extends('layout/main')

@section('title', 'Perpustakaan POLIWANGI')


@section('container')
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
    
    
    {{-- <p>Politeknik Negeri Banyuwangi merupakan pendidikan Vokasi yang mana salah satu pusat jantungnya adalah Perpustakaan Politeknik Negeri Banyuwangi. Pada zaman global sekarang, pendidikan merupakan suatu yang penting dimana pendidikan merupakan akar peradaban sebuah bangsa. Untuk memperoleh pendidikan banyak cara yang dapat kita capai diantaranya melalui perpustakaan. Perpustakaan berfungsi sebagai salah satu fantor yang mempercepat akselerasi transfer ilmu pengetahuan, oleh karenanya perpustakaan merupakan suatu kesatuan yang tidak dapat dipisahkan dalam system pendidikan suatu lembaga.</p>
    <p>Seluruh kegiatan Perpustakaan Poliwangi ditujukan untuk:</p>
    <ul type="circle">
      <li><a>Menyediakan  dan menyebarkan sumber informasi ilmiah, dalam rangka proses belajar mengajar civitas akademika Poliwangi, sehingga menghasilkan sumber daya manusia yang memiliki kualitas, mandiri dan profesional yang diterima di tingkat lokal, nasional dan internasional.</a></li>
      <li><a>Membantu meningkatkan kemampuan Poliwangi dalam menjalankan fungsi pendidikan, penelitian dan pengabdian masyarakat</a></li>
    </ul>

    <p>Seiring dengan pengembangan teknologi dan informasi pada saat ini khusunya untuk membangun sistem informasi perpustakaan yang berbasis Web, diperlukan sarana penunjang berupa komputer, sistem yang dibangun, pengelolaan SDM, manajemen dan operasional yang bagus, sehingga tercipta layanan yang prima.
      Untu dapat memfasilitasi setip pengunjung atau pengguna perpustakaan diperlukan dokumen resmi yang diperuntukkan guna merekam data anggota dalam sistem, dan diperlukan kartu anggota perpustakaan bagi penggunanya. Salah satu syarat untuk menjadi anggota perpustakaan adalah registrasi/ pendaftaran dengan melengkapi beberapa dokumen yang diperlukan untuk mempermudah proses administrasi dari setiap transaksi mutasi bahan pustaka.
      Pada perpustakaan poliwangi offline kartu anggota dapat digunakan sebagai kunci masuk untuk peminjaman buku
      </p>

    <p>Alasan dilaksanakannya kegiatan Layanan Perpustakaan adalah :</p>
    <ul type="circle">
      <li><a>Untuk meningkatkan layanan minat baca dan pemanfaatan fasilitas perpustakaan khususnya bagi mahasiswa Politeknik Negeri Banyuwangi, staf dosen, dan staf penunjang pendidikan. </a></li>
      <li><a>Untuk meningkatkan layanan khusus kepada pihak-pihak lain yang berkepentingan dengan Perpustakaan Politeknik Negeri Banyuwangi.</a></li>
      <li><a>Sebagai jantung dari perguruan tinggi perpustakaan diharapkan dapat memberikan wawasan keilmuan kepada seluruh stakeholder utama.</a></li>
    </ul> --}}
  </div>
@endsection