<?php
include('header.php');
include('navbar.php');
include('koneksi.php');

$id = $_GET['id'];
$sql = mysqli_query($koneksi, "select * from fasilitas_hotel WHERE id='$id'");
while ($data = mysqli_fetch_array($sql)) {
?>


  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Edit Fasilitas Hotel
            </div>
            <div class="card-body">
              <form action="update_fasilitas.php" method="post">

                <div class="form-group">
                  <label>Fasilitas</label>
                  <input type="text" name="f1" value="<?php echo $data['f1'] ?>" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
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