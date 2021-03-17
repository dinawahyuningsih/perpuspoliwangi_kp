@extends('layout/main')

@section('title', 'Struktur Organisasi')


@section('container')

<style type="text/css">
#canvas{

             width: 1320px;
             height: 500px;
}
.isi{
    
    margin-top: 15px;
    font-size: 15px;
    padding: 25px;   
}
.image img{
    width: 500px;

}
.ketua{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;

    width: 1200px;
    border: 1px solid;
    /* border-color: #292929; */
    margin: auto;
}
.profil img{
    width: 300px;
    margin-left:100px;
    border-radius: 50%;
    margin-top: 30px;
    margin-bottom: 10px;
    border: 2px solid black;
}
.profil p{
    text-align: center;
    margin-left:100px;
    font-family: Stencil;
    font-size: 20px;
    background-color:black;
    color: white;
    margin-bottom: 30px;
    
}
.profil2 p{
    text-align: center;
    margin-right:100px;
    font-family: Stencil;
    font-size: 20px;
    background-color: black;
    color: white;
    margin-bottom: 30px;
}
.profil2 img{
    width: 300px;
    margin-right:100px;
    border-radius: 50%;
    margin-top: 30px;
    margin-bottom: 10px;
    border: 2px solid black;
}
.isi h3{
    text-align: center;
    margin-bottom: 30px;
}
.text ol{
    width: 700px;
}
.text h4{
    text-align: center;
    margin-bottom: 20px;
    background-color:black;
    padding: 25px;
    color: white;
    margin-top: 20px;
}
.tugas{
    padding: 20px 0px 10px 50px;
}
</style>

<div class="isi">
    

    
    <h3><b>STRUKTUR ORGANISASI PERPUSTAKAAN<br>POLITEKNIK NEGERI BANYUWANGI</b></h3>
    <hr>
<div class="canvas">
    <canvas id="canvas"></canvas>
    <script src="js/script.js"></script>

   

</div>

    <div class="text">
    <h4 class="judul " style="color: black; background-color: rgb(167, 133, 21);"><strong>Personil Perpustakaan</strong></h4>
    <div class="ketua" style="margin-bottom: 30px">
        <div class="profil">
            <img src="img/SUBONO.jpg" alt="">
            <p>SUBONO</p>
        </div>
        <div class="tugas" style="margin-top:75px">
        <h5>KETUA PERPUSTAKAAN (KAPUS)<br></h5>
        <ol type="1">
            <li>Menyusun rencana strategi perpustakaan.</li>
            <li>Menyusun rencana dan program kerja tahunan.</li>
            <li>Menyusun program pengembangan Perpustakaan.</li>
            <li>Mengorganisasikan sumber daya dan dana.</li>
            <li>Membimbing dan membina sumber daya manusia di unitnya.</li>
            <li>Mengkoordinasikan penyelenggaraan bidang -bidang yang ada di unitnya.</li>
            <li>Melakukan monitoring & evaluasi pelaksanaan tugas layanan teknis, layanan pengguna, pengembangan dan kerjasama, serta administrasi dan kerumahtanggaan.</li>
        </ol>
        </div>
    </div>

    <div class="ketua" style="margin-bottom: 30px; margin-top: 50px;">
        
        <div class="tugas" style="margin-top:20px">
        <h5>STAF BAGIAN AKUISISI DAN PENGOLAHAN<br></h5>
        <ol type="1">
            <li>Melaksanakan kegiatan stok opname koleksi.</li>
            <li>Menerima bahan pustaka dari Unit Layanan Pengadaan.</li>
            <li>Verifikasi bahan perpustakaan dengan database yang ada.</li>
            <li>Menginput data bibliografis bahan pustaka ke dalam sistem otomasi perpustakaan.</li>
            <li>Melaksanakan  verifikasi Bahan Pustaka  baik dengan cara manual  maupun elektronik.</li>
            <li>Melakukan  penyusunan  katalogisasi  koleksi baik dengan cara manual maupun elektronik.</li>
            <li>Melakukan  pencantuman  klasifikasi  koleksi baik dengan cara manual maupun elektronik.</li>
            <li>Melakukan penentuan tajuk subyek  koleksi baik dengan cara manual maupun elektronik.</li>
            <li>Memasukkan data bibliografi koleksi ke dalam sistem database perpustakaan.</li>
            <li>Melaksanakan perbaikan data koleksi penggantian.</li>
            <li>Melaksanakan kegiatan  finishing, berupa  label, barcode, stempel indentitas koleksi, title tape.</li>
            <li>Melaksanakan kegiatan  menyampul buku dengan plastik  berdasar standar penyampulan.</li>
            <li>Perbaikan  dan penggantian barcode dan  label  bahan  pustaka  yang dianggap usang dan rusak.</li> 
        </ol>
        </div>
        <div class="profil2">
            <img src="img/bu uri.jpg" alt="">
            <p>URI ANJARWATI</p>
        </div>
    </div>
    
    <div class="ketua" style="margin-bottom: 30px">
        <div class="profil" style="margin-top: 10px">
            <img src="img/mbak cici.jpg" alt="" >
            <p>MARGARETA RETCIANA</p>
        </div>
        <div class="tugas" style="margin-top:15px">
        <h5>STAF PELAKSANA BAGIAN ADMINISTRASI DAN LAYANAN<br></h5>
        <ol type="1">
            <li>Melaksanakan kegiatan peminjaman dan pengembalian buku.</li>	
            <li>Melaksanakan sangsi denda keterlambatan pengembalian buku.</li>
            <li>Menyusun dan melaksanakan pemanggilan pengguna yang terlambat mengembalikan buku.</li>
            <li>Melaksanakan pendataan dan pelaporan hasil jasa kegiatan sirkulasi.</li>
            <li>Melaksanakan administrasi penggantian buku yang dihilangkan pengguna.</li>
            <li>Melaksanakan kegiatan pesanan koleksi dan penagian koleksi dalam pesanan.</li>
            <li>Melakukan pendaftaran anggota perpustakaan.</li>
            <li>Melakukan kegiatan entri data anggota perpustakaan.</li>
            <li>Melakukan registrasi & aktivasi status keanggotaan.</li>
            <li>Memberikan dan membuat permohonan surat pengantar oleh pengguna.</li>
            <li>Mengkoordinasikan kegiatan administrasi sumbangan alumni.</li>
            <li>Mengkoordinasikan kegiatan administrasi penyerahan tugas akhir mahasiswa.</li>
            <li>Mengkoordinasikan kegiatan administrasi bebas pinjam.</li>
            <li>Mengkoordinasikan  kegiatan  front office  Log In  dan  penitipan tas.</li>
        </ol>
        </div>
    </div>

    </div>           
</div>

@endsection

 