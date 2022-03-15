<?php include 'header.php'; ?>

<!-- Fontawsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<!-- banner -->
<div class="banner">
    <img src="images/photos/banner.jpg" class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown">Best Hotel in Jakarta</h1>
                <p class="animated fadeInUp">We will always be your favorite hotel!</p>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->

<!-- services -->
<div class="spacer services wowload fadeInUp">
    <div class="container">
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
</div>
</div>
<!-- services -->


<?php include 'footer.php'; ?>