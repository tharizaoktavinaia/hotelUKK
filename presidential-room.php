<?php include 'header.php'; ?>

<div class="container">
    <?php
    require 'db.php';
    $sql = mysqli_query($connection, "select * from kamar WHERE id_kamar='3'");
    while ($data = mysqli_fetch_array($sql)) {
    ?>
        <h1 class="title"><?php echo $data['jenis_kamar']; ?> </h1>
    <?php
    }
    ?>





    <!-- RoomDetails -->
    <div id="RoomDetails" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            require 'db.php';
            $sql = mysqli_query($connection, "select * from kamar WHERE id_kamar='3'");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <div class="item active"><img src="images/photos/<?php echo $data['gambar']; ?>" class="img-responsive" alt="slide"></div>
        </div>
    <?php } ?>
    <!-- Controls -->
    <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
    <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
    </div>
    <!-- RoomCarousel-->
    <div id="information" class="spacer reserve-info ">
        <div class="container">
            <div class="row">

            </div>
        </div>


        <div class="room-features spacer">
            <div class="row">
                <div class="col-sm-6 col-md-5">
                    <?php
                    require 'db.php';
                    $sql = mysqli_query($connection, "select * from kamar WHERE id_kamar='3'");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>

                        <p><?php echo $data['penjelasan']; ?></p>
                </div>

                <div class="col-sm-6 col-md-3 amenitites">
                    <?php
                        require 'db.php';
                        $query = "SELECT * FROM fasilitas_kamar WHERE id='3'";
                        $query_run = mysqli_query($connection,  $query);
                        foreach ($query_run as $row)
                    ?>

                    <h3><?php echo $row['judul']; ?> </h3>
                    <ul>
                        <li><?php echo $row['f1']; ?></li>
                        <li><?php echo $row['f2']; ?></li>
                        <li><?php echo $row['f3']; ?></li>
                        <li><?php echo $row['f4']; ?></li>
                        <li><?php echo $row['f5']; ?></li>
                    </ul>
                </div>
            <?php
                    }
            ?>
            <div class="col-sm-3 col-md-2">
                <?php
                require 'db.php';
                $sql = mysqli_query($connection, "select * from kamar WHERE id_kamar='3'");
                while ($data = mysqli_fetch_array($sql)) {
                ?>
                    <div class="size-price">Harga per malam<span> Rp. <?php echo $data['tarif']; ?></span></div>
            </div>
        <?php
                }
        ?>

        <div>
            <form action="reservasi.php" method="post">
                <button type="submit" name="reservasi.php" class="btn btn-default">Send Reservation</button>
            </form>
        </div>
            </div>
        </div>

    </div>
</div>


</div>
<?php include 'footer.php'; ?>