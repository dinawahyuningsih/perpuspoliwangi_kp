<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
<style type="text/css">
body{
    font-family: arial;
    font-size: 14px;
    margin: 0;
    padding: 0;

}

    
header{
    font-size: 15px;
    display: flex;
    flex-wrap: wrap;
    background-color: black;
    padding: 10px 70px 0;
    height: 90px;
    width: 100%;
    position: fixed;

}
.logo img{
    width: 60px;
    margin-top:10px;
    position: fixed;
    
}
header h4{
    color: #fff;
    margin-top: 20px;
    padding: 0 10px;
    position: fixed;
    left: 135px;

}
header ul{
    list-style-type: none;
    margin: 0;
    padding: 0 10px 0 0;
    margin-right:50px;
    position: fixed;
}
header ul li {
    margin-right: 55px;
}

header ul li.utama{
    display: inline-table;
    
}
header ul li a:hover{
    background-color: white;
    color: black;
}
header ul li a{
    
    display: block;
    text-decoration: none;
    line-height: 50px;
    padding: 0 30px;
    color: #fff; 
    
    
}
nav{
    margin-top:10px;
    margin-left: 500px;

}

.utama ul{
    display: none;
    z-index: 2;
}
.utama:hover ul{
    display: block;
    
}
.utama ul li{
    display: block;
    background-color: grey;
    width: 180px;

}
.isi{
background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("img/home.jpg");
    background-size: cover;
    height: 100vh;
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
    /* justify-content: space-between; */
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


<div id="canvas">
    <header>
    <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
    <div class="main">
                <h4> UPT. PERPUSTAKAAN
                <br>POLITEKNIK NEGERI BANYUWANGI</h4>
                
            </div>

            <nav>
                <ul>
                    <li class="utama"><a href="">Beranda</a></li>
                    <li class="utama"><a href="">Profil &#9662;</a>
                        <ul>
                            <li><a href="">Visi Misi</a></li>
                            <li><a href="">Staf Perpustakaan</a></li>
                            <li><a href="">Tata Tertib</a></li>
                        </ul>
                    </li>
                    <li class="utama"><a href="">Layanan &#9662;</a>
                        <ul>
                            <li><a href="">Jam Layanan</a></li>
                        </ul>
                    </li>
                    <li class="utama"><a href="">Galeri</a></li>
                </ul>  
            </nav>
            </header>
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
</body>
</html><?php /**PATH C:\xampp\htdocs\perpus\resources\views/webperpus.blade.php ENDPATH**/ ?>