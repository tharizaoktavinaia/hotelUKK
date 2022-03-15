<?php include 'header.php'; ?>

<div class="container">

  <h2>Rooms & Tarif</h2>


  <!-- form -->

  <div class="row">
    <?php
    require 'db.php';
    $sql = mysqli_query($connection, "select * from kamar WHERE jenis_kamar='Standard Room'");
    while ($data = mysqli_fetch_array($sql)) {
    ?>
      <div class="col-sm-6 wowload fadeInUp">
        <div class="rooms">
          <div class="rooms"><img src="images/photos/<?php echo $data['gambar']; ?>" class="img-responsive">
            <div class="info">
              <h3><?php echo $data['jenis_kamar']; ?></h3>
              <p><?php echo $data['penjelasan']; ?></p><a href="standard-room.php" class="btn btn-default">Check Details</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <?php
    require 'db.php';
    $sql = mysqli_query($connection, "select * from kamar WHERE jenis_kamar='Deluxe Room'");
    while ($data = mysqli_fetch_array($sql)) {
    ?>
      <div class="col-sm-6 wowload fadeInUp">
        <div class="rooms">
          <div class="rooms"><img src="images/photos/<?php echo $data['gambar']; ?>" class="img-responsive">
            <div class="info">
              <h3><?php echo $data['jenis_kamar']; ?></h3>
              <p><?php echo $data['penjelasan']; ?></p><a href="deluxe-room.php" class="btn btn-default">Check Details</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <?php
    require 'db.php';
    $sql = mysqli_query($connection, "select * from kamar WHERE jenis_kamar='Presidential Room'");
    while ($data = mysqli_fetch_array($sql)) {
    ?>
      <div class="col-sm-6 wowload fadeInUp">
        <div class="rooms">
          <div class="rooms"><img src="images/photos/<?php echo $data['gambar']; ?>" class="img-responsive">
            <div class="info">
              <h3><?php echo $data['jenis_kamar']; ?></h3>
              <p><?php echo $data['penjelasan']; ?></p><a href="presidential-room.php" class="btn btn-default">Check Details</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <?php
    require 'db.php';
    $sql = mysqli_query($connection, "select * from kamar WHERE jenis_kamar='Suite Room'");
    while ($data = mysqli_fetch_array($sql)) {
    ?>
      <div class="col-sm-6 wowload fadeInUp">
        <div class="rooms">
          <div class="rooms"><img src="images/photos/<?php echo $data['gambar']; ?>" class="img-responsive">

            <div class="info">
              <h3><?php echo $data['jenis_kamar']; ?></h3>
              <p><?php echo $data['penjelasan']; ?></p><a href="suite-room.php" class="btn btn-default">Check Details</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>



</div>
<?php include 'footer.php'; ?>