

<?php $__env->startSection('title', 'Cek Denda'); ?>


<?php $__env->startSection('container'); ?>

    <style type="text/css">
        body{
            background-image: url(img/a.jpeg);
        }

        .navbar{
            background-color:rgb(97,150,185)
        }
        button{
            margin-bottom: 163px;
        }
       
    </style>
  </head>
  <body>
  

        <form class="needs-validation" novalidate  style="width: 1100px; margin:auto; margin-left: 120px; margin-top:50px;">
      <div class="container">

        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Nama:</label>
            <input type="text" class="form-control" id="inputCity">
          </div>



          <div class="form-group col-md-6">
            <label for="inputCity">NIM :</label>
            <input type="text" class="form-control" id="inputCity">
          </div>

          <div class="form-group col-md-6">
            <label for="inputCity">Mahasiswa Jurusan :</label>
            <input type="text" class="form-control" id="inputCity">
          </div>


          <table class="table">
          <thead class="thead-light">
          <tr>
            <th scope="col">Judul Buku</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Denda</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          </tbody>
          </table>

<div class="button">
        <button type="reset" class="btn btn-danger">Reset</button>
</div>
        </div>
      </div>
      </form>




      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/denda.blade.php ENDPATH**/ ?>