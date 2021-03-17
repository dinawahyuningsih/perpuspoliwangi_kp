<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style type="text/css">
body{
    font-family: arial;
    font-size: 14px;
    margin: 0;
    padding: 0;

}
  

.logo img{
    width: 60px;
    margin-right: 10px;
    margin-left: 30px;
}

.navbar-brand{
    margin-right: 150px;
}
.nav-link{
    margin-right: 70px;
}
.isi{
background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("img/home.jpg");
    background-size: cover;
    height: 89vh;
    background-position: center;
    margin-bottom: 0;
}
.title{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.title p{
    color: white;
    font-size: 15px;
    text-align: center;
    margin-top: 80px;
}
.cp{
    
    padding: 10px;
    background-color: black;
    color: #ccc;
    flex-wrap: wrap;
    display: flex;
}
.tengah{
    color: white;
    text-align: center;
    font-size: 13px;
    margin-left: 220px;
    padding: 3px;
}
.kiri ul{
    list-style-type: none;
}
.kiri img{
    width: 30px;
    margin-bottom: 5px;
    
}
.kontak ul{
    list-style-type: none;
    padding: 7px;
}
.kontak ul li{
    margin-left: 5px;
    margin-bottom: 19px;
}
.kanan{
    margin-left:240px;
}
.kanan img{
    width: 32px;
    margin-top: 15px;
    
}
.email ul{
    list-style-type: none;
    padding: 7px;
}
.email ul li{
    margin-left: 5px;
    margin-bottom: 19px;
}
.tengah h3{
    margin-top: 0px;
    margin-bottom: 0px;
}
.tengah img{
    width: 40px;
    padding: 8px;
    
}
footer{
    text-align: center;
    padding: 3px;
    background-color: black;
    color: #ccc;
}
</style>    
</head>
<body>


<div id="header" class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <a class="navbar-brand text-light" href="#" style="padding: -5px">UPT. Perpustakaan <br><p style="font-size: 15px; margin-bottom:-0px;">Politeknik Negeri Banyuwangi</p></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="/">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/visi-misi">Visi Misi</a>
                      <a class="dropdown-item" href="/staf-perpustakaan">Staf Perpustakaan</a>
                      <a class="dropdown-item" href="/tata-tertib">Tata tertib</a>
                    </div>
                  </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="/layanan">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/ebook">Ebook</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="/digilib">Digilib</a>
                  </li>
              </ul>
            </div>
          </nav>
        </div>
 
    <div class="isi">
            <div class="title">
                <p>Perpustakaan merupakan upaya untuk memelihara dan meningkatkan efisiensi dan efektifitas proses belajar-mengajar, juga sebagai salah satu sarana penunjang akademik yang memiliki peran cukup strategis dalam penyediaan informasi perkembangan ilmu pengetahuan bagi pengguna di lingkungan civitas akademika Politeknik Negeri Banyuwangi.</p>
            </div>
          
    </div>

<div class="cp">

    <div class="kiri">
        <ul>
        
        <li><img src="img/w.png" alt=""></li>
        <li><img src="img/tlf.png" alt=""></li>
        </ul>
    </div>
    
    <div class="kontak">
    <ul>
        
        <li>Telepon: + 62 (0333) 636780</li>
        <li>Fax: +62 (0333) 636780</li>
        </ul>
</div>

        <div class="tengah">
    <h3>POLIWANGI</h3>
    <br>Jalan Raya Jember No.KM13, Kawang, Labanasem, 
    <br>Kec. Kabat,Kabupaten Banyuwangi, Jawa Timur 68461<br>
    <img src="img/ii2.png" alt="">
        <img src="img/y2.png" alt="">
        <img src="img/x.png" alt="">
</div>

<div class="kanan">
    <img src="img/11.png" alt="">
    </div>
    <div class="email">
    <ul>
        <li>poliwangi@poliwangi.ac.id</li>
        <li>humas@poliwangi.ac.id</li>
        </ul>
</div>
</div>
    


    <footer>
        <p>2020 Copyright | Perpustakaan POLIWANGI.</p>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\perpus\resources\views/perpus.blade.php ENDPATH**/ ?>