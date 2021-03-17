@extends('layout/main')

@section('title', 'Struktur Organisasi')


@section('container')

<style type="text/css">
.layanan{
    text-align: center;
    padding: 50px;
}
.image-center img{
    width: 1000px;

    margin-bottom: 62px;
}
.canvas{
    width: 1100px;

    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.alert{
    width:500px;
    margin-bottom: 30px;
}
.card{
    width: 500px;
    margin: auto;
    text-align: center;
    margin-bottom: 80px;
}
.alert h5,
.card h5{
    text-align: center;
}
.card p{
    font-size: 17px;
    margin-bottom: 5px;
}
</style>



<div class="layanan">
    
    <h3><b>PELAYANAN PERPUSTAKAAN<br>POLITEKNIK NEGERI BANYUWANGI</b></h3>
</div>
<div class="image-center">
    <img src="img/layanan.jpg" class="rounded mx-auto d-block" alt="">
</div>
<div class="card text-white " style="background-color: rgb(197, 165, 57)" >
    <h5 class="card-header"><strong>WAKTU PELAYANAN :</strong></h5>
    <div class="card-body">
        <p>Hari Senin - Jumat</p>
            <p>Buka : 7.30 - 11.30 WIB</p>
            <p>Isturahat : 11.30 - 13.00 WIB</p>
            <p>Buka : 13.00 - 15.30 WIB</p>
        </ul>
    </div>
  </div>

<div class="canvas">
<div class="alert border-warning" role="alert">
    <h5 class="alert-heading"><strong>ALUR PEMBACA</strong></h5>
    <hr>
    <ul type="square">
        <li>Masuk untuk log in kehadiran di komputer log in.</li> 
        <li>Mengambil kunci loker dan menyimpan barang tas, jaket ke dalam loker.</li> 
        <li>Mencari data buku di komputer searching (OPAC).</li> 
        <li>Mencari buku pada rak-rak buku.</li> 
        <li>Membaca di ruang baca.</li> 
        <li>Jika selesai, keluar dari ruang baca.</li> 
        <li>Mengambil barang di loker dan mengembalikan kunci loker.</li> 
        <li>Selesai.</li> 
 
  </div>
  <div class="alert border-warning" role="alert">
    <h5 class="alert-heading"><strong>ALUR PEMINJAMAN</strong></h5>
    <hr>
    <ul type="square">
        <li>Masuk untuk log in di komputer.</li>
        <li>Memilih koleksi buku yang akan dipinjam.</li>
        <li>Menyerahkan KTM dan buku yang akan dipinjam.</li>
        <li>Jika belum terdaftar, maka Pemustaka mendaftar menjadi anggota terlebih dahulu.</li>
        <li>Jika sudah terdaftar, maka akan diproses peminjaman buku.</li>
        <li>Data peminjam akan disimpan.</li>
        <li>KTM dan buku yang akan dipinjam akan diberikan.</li>
        <li>Selesai.</li>
  </div>
  <div class="alert border-warning" role="alert">
    <h5 class="alert-heading"><strong>ALUR PENGEMBALIAN</strong></h5>
    <hr>
    <ul type="square">
        <li>Masuk untuk log in di komputer.</li>
        <li>Memilih koleksi buku yang akan dipinjam.</li>
        <li>Menyerahkan KTM dan buku yang akan dipinjam.</li>
        <li>Jika belum terdaftar, maka Pemustaka mendaftar menjadi anggota terlebih dahulu.</li>
        <li>Jika sudah terdaftar, maka akan diproses peminjaman buku.</li>
        <li>Data peminjam akan disimpan.</li>
        <li>KTM dan buku yang akan dipinjam akan diberikan.</li>
        <li>Selesai.</li>
  </div>
  <div class="alert border-warning" role="alert">
    <h5 class="alert-heading"><strong>ALUR PERPANJANGAN</strong></h5>
    <hr>
    <ul type="square">
        <li>Masuk untuk log in di komputer.</li>
        <li>Memilih koleksi buku yang akan dipinjam.</li>
        <li>Menyerahkan KTM dan buku yang akan dipinjam.</li>
        <li>Jika belum terdaftar, maka Pemustaka mendaftar menjadi anggota terlebih dahulu.</li>
        <li>Jika sudah terdaftar, maka akan diproses peminjaman buku.</li>
        <li>Data peminjam akan disimpan.</li>
        <li>KTM dan buku yang akan dipinjam akan diberikan.</li>
        <li>Selesai.</li>
  </div>
</div>

@endsection