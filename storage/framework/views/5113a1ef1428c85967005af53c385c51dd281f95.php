

<?php $__env->startSection('title', 'Visi Misi'); ?>


<?php $__env->startSection('container'); ?>


<style type="text/css">
.canvas{

    width: 1300px;
    margin: auto;
    margin-top: 30px;
    margin-bottom: 60px;
 
}
.image img{
    width: 1200px;
    margin-top: 20px;
    margin-left: 50px;
    margin-right:50px;
    
}
.image2,
.image3 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding-left: 50px;
    padding-right: 50px;
}
.image2 img{
    width: 575px;
    margin-top: 20px;  
}
.image3 img{
    width: 350px;
    margin-top: 20px;
}
</style>


<div class="canvas">


<div class="image2"> 
    <img src="img/galeri2.jpg" alt="" class="img-thumbnail">
    <img src="img/galeri8.jpg" alt="" class="img-thumbnail">
</div>

<div class="image3"> 
    <img src="img/galeri4.jpg" alt="" class="img-thumbnail">
    <img src="img/galeri5.jpg" alt="" class="img-thumbnail">
    <img src="img/galeri6.jpg" alt="" class="img-thumbnail">
</div>

<div class="image2"> 
    <img src="img/galeri7.jpg" alt="" class="img-thumbnail">
    <img src="img/galeri3.jpg" alt="" class="img-thumbnail">
</div>
</div>

<?php $__env->stopSection(); ?>

 
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/galeri.blade.php ENDPATH**/ ?>