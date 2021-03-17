

<?php $__env->startSection('title', 'Visi Misi'); ?>


<?php $__env->startSection('container'); ?>

<style type="text/css">

.isi{
    height: 580px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 25px;
    /* background-color: rgb(255, 231, 125) */
    
}
.image img{
    width: 300px;
    margin-top: 40px;
    margin-left: 100px;
}
.text{
    margin-top: 40px;
    margin-right: 100px;
    font-size: 15px;
    width: 500px;
}
.text h3{
    text-align: center;
    margin-bottom: 40px;
    /* background-color: rgb(255, 250, 221); */
}
.text h4{
    text-align: center;
    margin-top: 40px;
}
</style>
<div class="isi">
    <div class="image">
        <img src="img/visimisi.jpg" alt="">
    </div>

    <div class="text" >
    <h3><b>VISI DAN MISI PERPUSTAKAAN<br>POLITEKNIK NEGERI BANYUWANGI</b></h3>
    <hr>
    <h4>Visi</h4> 
    <p>Terselenggaranya perpustakaan Politeknik Negeri Banyuwangi sebagai pusat ilmu pengetahuan
    dan penyedia informasi dalam rangka menunjang tri dharma perguruan tinggi.</p>
    <h4>Misi</h4>
    <ul>
        <li><a>Meningkatkan peran perpustakaan sebagai pendukung proses belajarr mengajar.</a></li>
        <li><a>Menciptakan dan mengembangkan kebiasaan membaca di lingkungan kampus.</a></li>
        <li><a>Menjamin ketersediaan akses informasi terkini.</a></li>
        <li><a>Mewujudkan perpustakaan sebagai pusat layanan rujukan dan pusat mengakses ilmu pengetahuan.</a></li>
    </ul>
    </div>
    
</div>

<?php $__env->stopSection(); ?>

 
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/visimisi.blade.php ENDPATH**/ ?>