<?php
include('header.php');
include('navbar.php');
include('koneksi.php');

if (isset($_POST['edit_btn'])) {
  $id = $_POST['id'];
  $sql = mysqli_query($koneksi, "select * from kamar WHERE id_kamar='$id'");
  while ($data = mysqli_fetch_array($sql)) {
?>



    <body>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Edit Kamar
              </div>
              <div class="card-body">
                <form action="update_kamar.php" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                    <label>Penjelasan</label>
                    <input type="text" name="penjelasan" value="<?php echo $data['penjelasan'] ?>" class="form-control">
                    <input type="hidden" name="id_kamar" value="<?php echo $data['id_kamar'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kamar</label>
                    <input type="text" name="jenis_kamar" value="<?php echo $data['jenis_kamar'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Stock Kamar</label>
                    <input type="text" name="stok_kamar" value="<?php echo $data['stok_kamar'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label> Tarif </label>
                    <input type="text" name="tarif" value="<?php echo $data['tarif'] ?>" class="form-control">
                  </div>
                  <div class="from-group">
                    <label> Gambar </label>
                    <input type="file" name="gambar" id="gambar" class="form-control" required>
                    <h1> </h1>
                  </div>


                  <input type="submit" name="update_kamar" id="update_kamar" value="UPDATE" class="btn btn-primary">
                  <button type="reset" class="btn btn-default">RESET</button>

                </form>
            <?php

          }
        }
            ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>

    <?php include('footer.php'); ?>