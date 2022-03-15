<?php
include('header.php');
include('navbar.php');
include('koneksi.php');

$id = $_GET['id'];
$sql = mysqli_query($koneksi, "select * from fasilitas_kamar WHERE id='$id'");
while ($data = mysqli_fetch_array($sql)) {
?>


  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Edit Fasilitas Kamar
            </div>
            <div class="card-body">
              <form action="update.php" method="post">

                <div class="form-group">
                  <label>Tipe Kamar</label>
                  <input type="text" name="tipe" value="<?php echo $data['tipe'] ?>" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Fasilitas 1</label>
                  <input type="text" name="f1" value="<?php echo $data['f1'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Fasilitas 2 </label>
                  <input type="text" name="f2" value="<?php echo $data['f2'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Fasilitas 3</label>
                  <input type="text" name="f3" value="<?php echo $data['f3'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Fasilitas 4</label>
                  <input type="text" name="f4" value="<?php echo $data['f4'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Fasilitas 5</label>
                  <input type="text" name="f5" value="<?php echo $data['f5'] ?>" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">UPDATE</button>
                <button type="reset" class="btn btn-default">RESET</button>
              <?php
            }
              ?>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <?php include('footer.php'); ?>